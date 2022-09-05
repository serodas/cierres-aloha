<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as FOS;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\Expr\Join;

use AppBundle\Entity\TblFPagos;
use AppBundle\Entity\VentaHistorial;

use AppBundle\Util\Ambiente;
use \Mpdf\Mpdf;

use AppBundle\Services\mufService;
use DateTime;
use Symfony\Polyfill\Mbstring\Mbstring;

class ApiController extends FOSRestController implements ClassResourceInterface
{

    public function getManager(){
        return $this->getDoctrine()->getManager();
    }

    public function getRepository(){
        return $this->getManager()->getRepository("AppBundle:Cierre");
    }

    /**
     * @FOS\Get("/cuadres", name="cuadres-api",options={"method_prefix" = false})
     */
    public function cgetAction(Request $request)
    {
        $cuadres = $this->getRepository();
        $cantidaddatos = $cuadres->createQueryBuilder('c')
        ->select('count(c.id)')
        ->Where('c.motivo != 2')
        ->getQuery()
        ->getSingleScalarResult();

        if ($cantidaddatos > 0 ){
            $datos = $cuadres->createQueryBuilder('c')
            ->Where('c.motivo != 2 and c.fecha >= 20210101')
            ->getQuery()
            ->getResult();
            
            $valores = array();
            foreach ($datos as $dato){
                $valores[]= array(
                    'id'=> $dato->getId(),
                    'fecha'=> $dato->getFecha(),
                    'punto' => $dato->getTerminal()->getName(),
                    'cajero'=> $dato->getNameUser(),
                    'efectivo'=> $dato->getDigitado(),
                    'motivo' => $dato->getMotivo()->getDescripcion()
                );
            }
            $respuesta = array(
                'data'=>$valores
            );
        }else{
            $respuesta = array(
                'error'=>'No se encontraron registros para su busqueda'
            );
        }
        
        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Get("/cuadrecajero", name="cuadrecajero-api",options={"method_prefix" = false})
     */
    public function cuadreAction(Request $request)
    {
        $cuadres = $this->getRepository();
        $cantidaddatos = $cuadres->createQueryBuilder('c')
        ->select('count(c.id)')
        ->innerJoin('c.empleado','e')
        ->Where('e.nickName = :login and c.motivo != 2')
        ->setParameter(':login', $this->getUser()->getUserName())
        ->getQuery()
        ->getSingleScalarResult();

        if ($cantidaddatos > 0 ){
            $datos = $cuadres->createQueryBuilder('c')
            ->innerJoin('c.empleado','e')
            ->Where('e.nickName = :login and c.motivo != 2')
            ->setParameter(':login', $this->getUser()->getUserName())
            ->getQuery()
            ->getResult();

            foreach ($datos as $dato){
                $valores[]= array(
                    'id'=> $dato->getId(),
                    'fecha'=> $dato->getFecha(),
                    'punto' => $dato->getTerminal()->getName(),
                    'cajero'=> $dato->getNameUser(),
                    'efectivo'=> $dato->getDigitado(),
                    'motivo' => $dato->getMotivo()->getDescripcion()
                );
            }

            $respuesta = array(
                'data'=>$valores
            );
        }else{
            $respuesta = array(
                'error'=>'No se encontraron registros para su busqueda'
            );
        }
        
        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Post("/autorizaciones/{id}", name="autorizaciones-api",options={"method_prefix" = false})
     */
    public function autorizarAction(Request $request,$id){
        $observacion = $request->get('observacion');
        $cierreObject = $this->getRepository()->find($id);
        if ($cierreObject->getMotivo()->getCodigo() == Ambiente::ACTIVO){
            $fecha= $cierreObject->getFecha();
            $centro = $cierreObject->getTerminal()->getId() == Ambiente::CAFETERIACENTRO ? 'ALC': 'ALO' ;
            if( $this->get(mufService::class)->validarSiExisteCierreCentroMuf($fecha,$centro)){
                $login = $this->getUser()->getUserName();
                if ( $this->getRepository()->autorizaCierre($id,$login,$observacion)){
                    $data = array(
                        "status"=>"success",
                        "mensaje"=>"Se ha autorizado modificar la caja ".$id,
                        "id"=>$id,
                        "observacion"=>$observacion
                    );
                }
                else{
                    $data = array(
                        "status"=>"error",
                        "mensaje"=>"error al intentar actualizar el registro",
                        "id"=>$id
                    );
                }
            }else{
                $data = array(
                    "status"=>"error",
                    "mensaje"=>"Ya se realizo el cierre de centro en MUF del día: $fecha para el centro de atencion $centro. Por favor solicite Eliminarlo!",
                    "id"=>$id
                );
            }
        }
        else{
            $data = array(
                "status"=>"error",
                "mensaje"=>"La caja ".$id." no se encuentra cerrada",
                "id"=>$id
            );
        }

        $view = $this->view($data,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Post("/ediciones/{id}", name="ediciones-api",options={"method_prefix" = false})
     */
    public function editarAction(Request $request,$id)
    {
        if($request->isMethod('post')){
            $ccajero = $this->getRepository()->find($id);
            if($ccajero->getMotivo()->getCodigo() == Ambiente::AUTORIZADO){
                $efectivo = $request->get('ventregado');
                    if($efectivo != null){
                        $em = $this->getManager();
                      
                        $ccajero->setDigitado($efectivo);

                        $login = $this->getUser()->getUserName();
                        $fecha = $request->get('idFecha');

                        $punto = $request->get('punto');
                       
                        $empleado = $em->getRepository("AppBundle:Empleado")->findOneByNickName($login);
                        $real = $this->getRepository()->getEfectivoReal($fecha,$empleado->getId(),$punto);
                        $diferencia = $efectivo - $real ;
                        $ccajero->setDiferencia($diferencia);

                        $ccajero->setMotivo($this->getManager()->getRepository("AppBundle:Motivo")->findOneByCodigo(Ambiente::ACTIVO));
                        //$ccajero->setUpdatedAt(new \Datetime('now', new \DateTimezone('America/Lima')));

                        //****************************** */
                        $cierresTarjetasArrayRequest = $request->get('tarjetas');
                        if(count($cierresTarjetasArrayRequest) > 0){
                            foreach($cierresTarjetasArrayRequest as $cierreTarjeta){
                                $cierreTarjetaObject = $this->getManager()->getRepository("AppBundle:CierreTarjeta")->find($cierreTarjeta["id"]);
                                $cierreTarjetaObject->setCantidad($cierreTarjeta["cantidad"]);
                                $cierreTarjetaObject->setTotal($cierreTarjeta["total"]);
                                $cierreTarjetaObject->setUpdatedAt(new \Datetime('now', new \DateTimezone('America/Lima')));
                            }
                        }
                        //****************************** */

                        $em->persist($cierreTarjetaObject);
                        $em->persist($ccajero);
                        $flush = $em->flush();

                        if($flush == null){
                            $params = array(
                                'status'=>'success',
                                'mensaje'=>'La caja '.$id.' se ha actualizado por $'.$efectivo,
                                'efectivo'=>$efectivo,
                                'punto'=>$punto
                            );
                        }else{
                            $params = array(
                                'status'=>'danger',
                                'mensaje'=>'Error al intentar modificar el registro'
                            );
                        }
                    }else{
                    $params = array(
                        'status'=>'danger',
                        'mensaje'=>'Digite un valor entregado',
                    );
                    }
            }else{
            $params = array(
            'status'=>'danger',
            'mensaje'=>'La caja '.$id.' NO! se encuentra autorizada'
            );
            }
        }        
        else{
            $params = array(
                'status'=>'danger',
                'mensaje'=>'Request no es POST'
            );
        } 

        $view = $this->view($params,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Post("/inactivaciones/{id}", name="inactivaciones-api",options={"method_prefix" = false})
     */
    public function inactivarAction(Request $request,$id)
    {
        $cierreCajeroObject = $this->getRepository()->find($id);
        if ($cierreCajeroObject->getMotivo()->getCodigo() == Ambiente::ACTIVO){
            $observacion = $request->get('observacion');
            $login = $this->getUser()->getUserName();
            if($observacion != ''){
                if ( $this->getRepository()->inactivaCierre($id,$observacion,$login)){
                    
                    $data = array(
                        "status"=>"success",
                        "mensaje"=>"Se ha cancelado el cierre de la caja ".$id,
                        "id"=>$id,
                        "observacion"=>$observacion
                    );
                }
                else{
                    $data = array(
                        "status"=>"error",
                        "mensaje"=>"error al intentar actualizar el registro",
                        "id"=>$id
                    );
                }
            }else{
                $data = array(
                    "status"=>"error",
                    "mensaje"=>"Imposible cancelar!, Digite una observacion",
                    "id"=>$id
                );
            }    
        }
        else{
            $data = array(
                "status"=>"error",
                "mensaje"=>"La caja ".$id." no se encuentra cerrada",
                "id"=>$id
            );
        }

        $view = $this->view($data,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Get("/punto/{id}", name="punto-api",options={"method_prefix" = false})
     */
    public function puntosAction($id)
    {
        $cierre = $this->getRepository()->find($id);
        $punto = $cierre->getTerminal();

        $valores[]= array(
                "id" => $punto->getId(),
                "descripcion" => $punto->getName()
        );
        
        $data= array(
            "valores"=>$valores
        );

        $view = $this->view($data,200);
        return $this->handleView($view);

    }

    
    /**
     * @FOS\Get("/actualizaciones/{fecha}", name="actualizar-api",options={"method_prefix" = false})
     */
    public function actualizarAction($fecha)
    {
        $cierres = $this->getRepository()->findByFecha($fecha);
        $em = $this->getManager();

        foreach ($cierres as $cierre)
        {   $e = $cierre->getEmpleado();
            $empleado = $cierre->getEmpleado()->getId();
            $punto = $cierre->getTerminal()->getId();
            $digitado = $cierre->getDigitado();

            if($punto == Ambiente::RECEPCIONCONSOTA OR $punto == Ambiente::RECEPCIONMODULO)
            {   
                $real = $this->getRepository()->getEfectivoRealporEmpleado($fecha,$empleado);
                $diferencia = $digitado - $real ;
            }else{
                $real = $this->getRepository()->getEfectivoReal($fecha,$empleado,$punto);
                $diferencia = $digitado - $real ;
            }

            $cierre->setDiferencia($diferencia);

            //*********** Si el valor $real = 0 es pq no se encontraron ventas, el cierre es un error lo voy a inactivar */
            if($real == 0){
                $this->getRepository()->inactivaCierre($cierre->getId(),'NO SE ENCONTRARON VENTAS','crontab');
            }
            //**************************************************************************************************** */
            $em->persist($cierre);

        }

        $flush = $em->flush();
        if ($flush == null)
        {
            $data = array(
                "status"=>"success",
                "mensaje"=>"Diferencias actualizadas con exito, No es necesario actualizar de nuevo para esta fecha"
            );
        }else{
            $data = array(
                "status"=>"error",
                "mensaje"=>"Error durante el proceso"
            );
        }

        $view = $this->view($data,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Get("/productosvendidos/{desde}/{hasta}", name="productosvendidos-api",options={"method_prefix" = false})
     */
    public function productosVendidosAction(Request $request,$desde,$hasta)
    {
        $reporte = $this->getRepository()->ReporteProductosVendidos($desde,$hasta);

        if(count($reporte)>0)
        {
            for($i=0;$i < count($reporte);$i++)
            {
                $valores[]= array(
                    "fecha"=> $reporte[$i]["FECHA"],
                    "cajero"=>$reporte[$i]["CAJERO"],
                    "punto"=>$reporte[$i]["Name"],
                    "producto"=>$reporte[$i]["ITEM"],
                    "descripcion"=>$reporte[$i]["LONGNAME"],
                    "impuesto"=>$reporte[$i]["IMPUESTO"],
                    "cantidad"=>$reporte[$i]["CANTIDAD"],
                    "total"=>$reporte[$i]["TOTAL"]*1
                );
            }
    
            $respuesta = array(
                'data'=>$valores
            );
        }else{
            $respuesta = array(
                'error'=>'No se encontraron registros para su busqueda'
            );
        }
       
        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Get("/consultacuentas/{fecha}", name="consultacuentas-api",options={"method_prefix" = false})
     */
    public function consultaCuentasAction(Request $request,$fecha)
    {   
      
        $cuenta_repo = $this->getManager()->getRepository("AppBundle:Venta");
        
        $cuentas = $cuenta_repo->consultacuentas($fecha);

        if( count($cuentas) > 0)
        {
            foreach($cuentas as $cuenta)
            {   
                $firstname = $cuenta->getEmpleado()->getFirstName();
                $lastname = $cuenta->getEmpleado()->getLastName();
                $cajero = $firstname.' '.$lastname;

                $fecha = $cuenta->getDob()->format('Ymd');
                $codigo_terminal = round($cuenta->getCheck()/10000);
                

                $valores[] = array(
                    "id" => $cuenta->getId(),
                    "terminal" => $this->getRepository()->obtenerPunto($codigo_terminal),
                    "fecha" => $fecha,
                    "empleado"=>$cajero,
                    "cuenta"=> $cuenta->getCheck(),
                    "fpago" => $cuenta->getTypeid()->getName(),
                    "valor"=> $cuenta->getAmount()
                );
            }
        }else{
            $valores = array(
                'error'=>'No se encontraron registros para su busqueda'
            );
        }    
        
       
        $view = $this->view($valores,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Get("/formasdepago/{idSec}", name="formasdepago-api",options={"method_prefix" = false})
     */
    public function formasPagosByFechaAndCuentaAction($idSec)
    {
        // $fpago_repo = $this->getManager()->getRepository("AppBundle:TblFPagos");
        // $fpagos = $fpago_repo->findAll();

        $tblGndSaleRepository = $this->getManager()->getRepository("AppBundle:Venta");
        $tblGndSaleObject = $tblGndSaleRepository->find($idSec);

        $fecha = $tblGndSaleObject->getDob();
        $check = $tblGndSaleObject->getCheck();

        $formasPagoByCuentaAndFecha = $tblGndSaleRepository->getTblGndSaleByFechaAndCheck($fecha,$check);
        // $formadepagodelaventa = $venta->getTypeid()->getId();

        // foreach($fpagos as $fpago)
        // {
        //     $valores[]= array(
        //         "id" => $fpago->getId(),
        //         "descripcion" => $fpago->getNAME()
        //     );
        // }

        
        $data= array(
            "valores"=>$formasPagoByCuentaAndFecha,
            "tblFpagos" => $this->getManager()->getRepository("AppBundle:tblFPagos")->findAll()

        );

        $view = $this->view($data,200);
        return $this->handleView($view);

    }

    /**
     * @FOS\Post("/edicionesventas", name="edicionesventas-api",options={"method_prefix" = false})
     */
    public function editarVentaAction(Request $request)
    {   
        $em = $this->getManager();
        $tblGndSaleArrayRequest = $request->get('tblgndsale');
        $totalReal = $request->get('totalReal');
        $totalNuevo = $request->get('totalNuevo');
        $observacion = $request->get('observacion');

        $createdAt = new \Datetime('now', new \DateTimezone('America/Lima'));
        $login = $this->getUser()->getUserName();

        $respuesta = array();
        if($totalNuevo == $totalReal){
            if(count($tblGndSaleArrayRequest) > 0){
                foreach($tblGndSaleArrayRequest as $formaDePago){
            
                    $tblGndSaleObject = $this->getManager()->getRepository("AppBundle:Venta")->find($formaDePago["idsec"]);
                   
                    $ventaHistorial = new VentaHistorial();
                    $ventaHistorial->setIdSec($tblGndSaleObject->getId());
                    $ventaHistorial->setFecha($createdAt->format('Y-m-d'));
                    $ventaHistorial->setCuenta($tblGndSaleObject->getCheck());
                    $ventaHistorial->setEmpleado($tblGndSaleObject->getEmpleado());
                    $ventaHistorial->setFpagonew($this->getManager()->getRepository("AppBundle:TblFPagos")->find($formaDePago["typeid"]));
                    $ventaHistorial->setFpagoold($tblGndSaleObject->getTypeid());
                    $ventaHistorial->setValornew($formaDePago["amount"]);
                    $ventaHistorial->setValorold($tblGndSaleObject->getAmount());
                    $ventaHistorial->setValortotalnew($totalNuevo);
                    $ventaHistorial->setValortotalreal($totalReal);
                    $ventaHistorial->setObservacion($observacion);
                    $ventaHistorial->setCreatedAt($createdAt);
                    $ventaHistorial->setLogin($login);

                    $tblGndSaleObject->setTypeid($this->getManager()->getRepository("AppBundle:TblFPagos")->find($formaDePago["typeid"]));
                    $tblGndSaleObject->setAmount($formaDePago["amount"]);

                    $em->persist($ventaHistorial);
                    $em->persist($tblGndSaleObject);
                }

                $flush = $em->flush();

                if($flush == null){
                    $respuesta = array(
                        'status' => 'success',
                        'mensaje' => 'Se han corregido con exito!',
                        'data' => $tblGndSaleArrayRequest
                    );
                }
            }
        }else{
            $respuesta = array(
                'status' => 'danger',
                'mensaje' => 'Totales no coinciden',
                'data' => null
            );
        }
       
        $view = $this->view($respuesta,200);
        return $this->handleView($view);

    }

    /**
    * @FOS\Get("/cierrescondiferencias/{desde}/{hasta}", name="cierrescondiferencias-api",options={"method_prefix" = false})
    */
    public function cierresDiferenciasAction(Request $request,$desde,$hasta)
    {   
        $tipo = $request->get('tipo');
        $cierres = $this->getRepository()->ReporteCierresconDiferencia($desde,$hasta,$tipo);

       foreach($cierres as $cierre)
       {
           $data[]=array(
            "fecha"=> date("Y/m/d",strtotime($cierre->getFecha())),
            "terminal"=>$cierre->getTerminal()->getName(),
            "cajero"=>$cierre->getNameUser(),
            "documento"=>$cierre->getDocumento(),
            "diferencia"=>$cierre->getDiferencia(),
            "motivo"=>$cierre->getMotivo()->getDescripcion(),
            "observacion"=>$cierre->getObservacion(),
            "createdAt"=>$cierre->getCreatedAt()->format('Y-m-d H:i:s'),
            "updatedAt"=>$cierre->getUpdatedAt()->format('Y-m-d H:i:s'),
            "userAudit"=>$cierre->getUserauditoria()
           );
       }

       $respuesta = array(
        'data'=>$data
        );

       $view = $this->view($respuesta,200);
       return $this->handleView($view);
    }

     /**
     * @FOS\Get("/reembolsos/{desde}/{hasta}", name="reembolsos-api",options={"method_prefix" = false})
     */
    public function refoundAction(Request $request,$desde,$hasta)
    {
       $reembolsos = $this->getRepository()->ReporteReembolsos($desde,$hasta);

       for($i=0;$i < count($reembolsos);$i++)
       {
           $data[]= array(
               "fecha"=> $reembolsos[$i]["FECHA"],
               "cajero"=>$reembolsos[$i]["CAJERO"],
               "punto"=>$reembolsos[$i]["Name"],
               "cuenta"=>$reembolsos[$i]["CHECK"],
               "producto"=>$reembolsos[$i]["ITEM"],
               "descripcion"=>$reembolsos[$i]["LONGNAME"],
               "total"=>$reembolsos[$i]["VALOR"]*1,
               "sysdate"=>$reembolsos[$i]["SYSDATE"]
           );
       }

       $respuesta = array(
        'data'=>$data
        );

       $view = $this->view($respuesta,200);
       return $this->handleView($view);
    }

    /**
     * @FOS\Get("/productosvendidosconsolidado/{desde}/{hasta}", name="productosvendidosconsolidado-api",options={"method_prefix" = false})
     */
    public function productosVendidosConsolidadoAction(Request $request,$desde,$hasta)
    {
        $reporte = $this->getRepository()->ReporteProductosVendidosConsolidado($desde,$hasta);

        if(count($reporte)>0)
        {
            for($i=0;$i < count($reporte);$i++)
            {
                $valores[]= array(
                    "fecha"=> $reporte[$i]["fecha"],
                    "punto"=>$reporte[$i]["punto"],
                    "producto"=>$reporte[$i]["producto"],
                    "descripcion"=>$reporte[$i]["descripcion"],
                    "cantidad"=>$reporte[$i]["cantidad"],
                    "total"=>$reporte[$i]["total"],
                    "hijos"=>$reporte[$i]["hijos"]
                );
            }
    
            $respuesta = array(
                'data'=>$valores
            );
        }else{
            $respuesta = array(
                'error'=>'No se encontraron registros para su busqueda'
            );
        }
       
        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
     * @FOS\Get("/gethijos", name="gethijos-api",options={"method_prefix" = false})
     */
    public function getHijosAction(Request $request)
    {
        $fecha = $request->get("dob");
        $terminal = $request->get("terminal");
        $producto = $request->get("producto");

        $consulta = $this->getRepository()->getChildren($fecha,$terminal,$producto);

        if(count($consulta)>0)
        {
            for($i=0;$i < count($consulta);$i++)
            {
                $valores[]= array(
                    "modificador"=> $this->getRepository()->getNameModificador($consulta[$i]["modificador"]),
                    "producto"=>$consulta[$i]["producto"],
                    "descripcion"=>$consulta[$i]["descripcion"],
                    "cantidad"=>$consulta[$i]["CANTIDAD"],
                    "total"=>$consulta[$i]["TOTAL"],
                    "categoria"=>$consulta[$i]["CATEGORIA"]
                );
            }
    
            $respuesta = array(
                'data'=>$valores
            );

        }else{
            $respuesta = array(
                'error'=>'No se encontraron registros para su busqueda'
            );
        }
       
        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
    * @FOS\Get("/listarsubsidiosenespeciealoha", name="voucher-subsidioenespeciealoha",options={"method_prefix" = false})
    */
    public function voucherAction(Request $request)
    {
        $desde = $request->get('desde');
        $hasta = $request->get('hasta');
      
        $voucheresAloha = $this->getRepository()->listarVoucherSubsidioEnEspecieTblGndTndr($desde,$hasta);

        $valores = array();
        foreach($voucheresAloha as $voucher => $registros){
            foreach($registros as $registro){

                $voucherEnBdmufTbsubesp = $this->get(mufService::class)->getDatosVoucherSubsidioEnEspecieTbsubespById($registro["AUTH"]);
            
                $fechaObject = new DateTime($registro["DATE"]);

                if(empty($voucherEnBdmufTbsubesp)){// validar si el voucher existe en datafono virtual (0000,00E000)
                    $valores[]= array(
                        "voucher" => $registro["AUTH"],
                        "fecha" => $fechaObject->format('Y-m-d'),
                        "valor" => number_format($registro["AMOUNT"]),
                        "cuenta" => $registro["CHECK"],
                        "cajero" => $registro["NOMBRE"],
                        "login" => $registro["nickname"],
                        "observacion" => "VOUCHER NO ENCONTRADO",
                        "id" => $registro["id"]
                    );
                }else{
                    $voucherDuplicadoIncorrecto = $this->get(mufService::class)->validarVoucherByFechaAndValorDescuento($registro["AUTH"],$registro["DATE"],$registro["AMOUNT"]);

                    if(empty($voucherDuplicadoIncorrecto)){// validar si el voucher existe en datafono en la misma fecha de la factura, sino existe se toma como un duplicado
                        $valores[]= array(
                            "voucher" => $registro["AUTH"],
                            "fecha" => $fechaObject->format('Y-m-d'),
                            "valor" => number_format($registro["AMOUNT"]),
                            "cuenta" => $registro["CHECK"],
                            "cajero" => $registro["NOMBRE"],
                            "login" => $registro["nickname"],
                            "observacion" => "VOUCHER MAL DIGITADO",
                            "id" => $registro["id"]
                        );
                    }
                }
            }
        }

       $respuesta = array(
        'data'=>$valores
        );

       $view = $this->view($respuesta,200);
       return $this->handleView($view);
    }
    
    /**
    * @FOS\Get("/listarsubsidiosenespeciebdmuf", name="voucher-subsidioenespeciebdmuf",options={"method_prefix" = false})
    */
    public function listarSubsidioEnEspecieTbSubEspAction(Request $request)
    {
        $desde = $request->get('desde');
        $hasta = $request->get('hasta');
      
        $voucheresTbSubEsp =$this->get(mufService::class)->getDatosVoucherSubsidioEnEspecieTbsubespByRangoFechas($desde,$hasta);

        $valores = array();
        foreach($voucheresTbSubEsp as $registro){
    
            $voucherIsValid = $this->getRepository()->existeVoucherTblGndTndrByAuth($registro["ID"]);
        
            $fechaObject = new DateTime($registro["FECHA"]);

            if(empty($voucherIsValid)){// validar si el voucher NO existe en ALOHA
                $valores[]= array(
                    "voucher" => $registro["ID"],
                    "fecha" => $fechaObject->format('Y-m-d'),
                    "nombre" =>  mb_convert_encoding($registro["NOMBRE"], 'UTF-8', 'UTF-8'),
                    "documento" => $registro["CUNUMID"],
                    "descuento" => $registro["VALOR_DES"],
                    "categoria" => $registro["CATEGORIA"]
                );
            }  
        }

       $respuesta = array(
        'data'=>$valores
        );

       $view = $this->view($respuesta,200);
       return $this->handleView($view);
    }

    /**
    * @FOS\Get("/generarInformeTarjetasPdf", name="voucher-api",options={"method_prefix" = false})
    */
    public function generarReporteFormasDePagoNoEfectivasPDFAction(Request $request)
    {   
        $fecha = $request->get('fecha');
        $centro_atencion = $request->get('centro_atencion');
        if($centro_atencion == 1){
            $descripcionCentroDeAtencion = 'PARQUERECREACIONAL';
        }elseif($centro_atencion == 2){
            $descripcionCentroDeAtencion = 'CAFETERIACENTRO';
        }else{
            $descripcionCentroDeAtencion = 'CAFETERIADOSQUEBRADAS';
        }

        $reporteDetallado = $this->getRepository()->ReporteDetalleFormaDePagoNoEfectivas($fecha,$centro_atencion);
        $reporteGeneral = $this->getRepository()->ReporteGeneralFormadePagoNoEfectivas($fecha,$centro_atencion);

        if(!empty($reporteDetallado) || !empty($reporteGeneral)){
            $respuesta = array(
                'generated' => true,
                'nombre' => 'tarjetas-' .$fecha.'-'.$descripcionCentroDeAtencion.'.pdf' ,
                'data' => $this->generarInformeTarjetasPdf($reporteDetallado,$reporteGeneral,$fecha,$centro_atencion)
                // 'data' => 'data:application/pdf;base64,' .  $this->generarInformeTarjetasPdf($reporteDetallado,$reporteGeneral,$fecha,$centro_atencion)
            );
        }else{
            $respuesta = array(
                'generated'=>false,
                'nombre' => 'sin documento',
                'data' => 'Por Favor Recuerda Ejecutar VBConvert'
            );
        }

        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
    * @FOS\Get("/generarInformeEfectivoPdf", name="efectivo-api",options={"method_prefix" = false})
    */
    public function generarReporteFormaDePagoEfectivoPDFAction(Request $request)
    {   
        $fecha = $request->get('fecha');
        $centro_atencion = $request->get('centro_atencion');

        if($centro_atencion == 1){
            $descripcionCentroDeAtencion = 'PARQUERECREACIONAL';
        }elseif($centro_atencion == 2){
            $descripcionCentroDeAtencion = 'CAFETERIACENTRO';
        }else{
            $descripcionCentroDeAtencion = 'CAFETERIADOSQUEBRADAS';
        }

        $reporteDetallado = $this->getRepository()->ReporteDetalleFormadePagoEfectivo($fecha,$centro_atencion);

        if(!empty($reporteDetallado)){
            $respuesta = array(
                'generated' => true,
                'nombre' => 'efectivo-' .$fecha.'-'.$descripcionCentroDeAtencion.'.pdf' ,
                'data' => $this->generarInformeEfectivoPdf($reporteDetallado,$fecha,$centro_atencion)
                // 'data' => 'data:application/pdf;base64,' .  $this->generarInformeTarjetasPdf($reporteDetallado,$reporteGeneral,$fecha,$centro_atencion)
            );
        }else{
            $respuesta = array(
                'generated'=>false,
                'nombre' => 'sin documento',
                'data' => 'Por Favor Recuerda Ejecutar VBConvert'
            );
        }

        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    private function generarInformeEfectivoPdf($datosArray,$fecha,$centroAtencion){
        if($centroAtencion == 1){
            $descripcionCentroDeAtencion = 'PARQUERECREACIONAL';
        }elseif($centroAtencion == 2){
            $descripcionCentroDeAtencion = 'CAFETERIACENTRO';
        }else{
            $descripcionCentroDeAtencion = 'CAFETERIADOSQUEBRADAS';
        }

        $mpdf = new \Mpdf\Mpdf([
            'tempDir' => __DIR__ . '/tmp',
            'mode' => 'utf-8',
            'format' => [215, 279],
            'default_font_size' => 12,
            'default_font' => "Arial",
            'orientation' => 'L'
        ]);
        
        $totalReal= 0;
        $totalDigitado = 0;
        $sobrantes = 0;
        $faltantes = 0;
        foreach($datosArray as $key => $registros)
        {   
            $paginaParaElReporteGeneral = $key + 1;
            $mpdf->AddPageByArray([
                'margin-left' => 20,
                'margin-right' => 20,
                'margin-top' => 0,
                'margin-bottom' => 0,
            ]);
            // $mpdf->Image(__DIR__ . '/../PlantillaPDF/FormatoCartaPresentacion.png', $x = 0, $y = 0, 215, 279, $type = 'png','',TRUE,FALSE);
         
            $mpdf->SetXY($x = 20, $y = 20);
            $styles = "<style type='text/css'>  table{ font-size: 12px;} table td{ border: 1px solid #B9B9B9;padding:5px;}</style>";
            $mpdf->WriteHtml($styles);
            $mpdf->shrink_tables_to_fit = 1;
            $title = "<div style='text-align:center'><b>INFORME CONSOLIDADO FORMA DE PAGO EFECTIVO</b></div>";
            $title .= "<div style='text-align:center'><b>$descripcionCentroDeAtencion</b></div>";
            $title .= "<div style='text-align:center'><b>$fecha</b></div>";
            $title .= "<div style='text-align:left;font-size:8px;'>Página:$key</div><hr/>";
            $mpdf->WriteHtml($title);

            $table = "<page><div>";
            $table .= "<table cellspacing='0' style='overflow:wrap;width:100%;'><thead><tr><td>Nombre Cajero</td><td>Documento</td><td>Trm</td><td>Punto</td><td>Valor Real</td><td>Valor Entregado</td><td>Diferencia</td><td>Observacion</td></tr></thead>";
            $table .= "<tbody>";
            
            foreach($registros as $registro){
                $table .= "<tr><td style='width:23%;'>".$registro['name_user']."</td><td>".$registro['documento']."</td><td>".$registro['terminal']."</td><td>".$registro['Name']."</td><td><b>".number_format($registro['real'])."</b></td><td>".number_format($registro['digitado'])."</td><td>".number_format($registro['diferencia'])."</td><td style='width:26%;'>".$registro['observacion']."</td></tr>";
                
                //*********** Necesario para el Reporte General */
                $totalReal = $totalReal + $registro['real'];
                $totalDigitado = $totalDigitado + $registro['digitado'];
                $diferencia = $registro['diferencia'];

                if($diferencia > 0){
                    $sobrantes = $sobrantes + $diferencia;
                }
                if($diferencia<0){
                    $faltantes = $faltantes + $diferencia;
                }
                //************************************************* */
            }

            $table .= "</tbody>";
            $table .= "</table>";
            $table .= "</div></page>";
            $mpdf->WriteHtml($table);
        }

        //Imprimir en una nueva hoja el reporte General y la firma
        $reporteGeneralEfectivo = array(
            "TOTAL REAL" => $totalReal,
            "TOTAL ENTREGADO" => $totalDigitado,
            "TOTAL SOBRANTES" => $sobrantes,
            "TOTAL FALTANTES" => $faltantes
        );

        $mpdf->AddPageByArray([
            'margin-left' => 20,
            'margin-right' => 20,
            'margin-top' => 0,
            'margin-bottom' => 0,
        ]);

        $mpdf->SetXY($x = 20, $y = 20);

        $titulo = "<div style='text-align:center'><b>INFORME CONSOLIDADO EFECTIVO</b></div>";
        $titulo .= "<div style='text-align:center'><b>$descripcionCentroDeAtencion</b></div>";
        $titulo .= "<div style='text-align:center'><b>$fecha</b></div>";
        $titulo .= "<div style='text-align:left;font-size:8px;'>Página:$paginaParaElReporteGeneral</div><hr/>";
        $mpdf->WriteHtml($titulo);

        $tableReporteGeneral = "<page><div>";
        $tableReporteGeneral .= "<table cellspacing='0' style='overflow:wrap;width:100%;'><thead><tr><td>Descripción</td><td>Total</td></tr></thead>";
        $tableReporteGeneral .= "<tbody>";
        
        foreach($reporteGeneralEfectivo as $key => $total){
            $tableReporteGeneral .= "<tr><td>".$key."</td><td>".number_format($total)."</td></tr>";
        }

        $tableReporteGeneral .= "<tr><td colspan='3' style='border:none;padding-top: 70px;'><b>Firma Supervisor(a) de Caja:</b>&nbsp;&nbsp;&nbsp;__________________________________________</td></tr>";

        $tableReporteGeneral .= "</tbody>";
        $tableReporteGeneral .= "</table>";
        $tableReporteGeneral .= "</div></page>";
        $mpdf->WriteHtml($tableReporteGeneral);

        $mpdf->Output(__DIR__ . "/tmp/efectivo","F"); 

        $data = \base64_encode(\file_get_contents(__DIR__ . "/tmp/efectivo"));

        return $data;
    }

    private function generarInformeTarjetasPdf($datosArray,$reporteGeneral,$fecha,$centroAtencion){
        if ($centroAtencion == 1){
            $descripcionCentroDeAtencion = 'PARQUE RECREACIONAL';
        }elseif($centroAtencion == 2){
            $descripcionCentroDeAtencion = 'CAFETERIA CENTRO';
        }else{
            $descripcionCentroDeAtencion = 'CAFETERIA DOSQUEBRADAS';
        }
        $mpdf = new \Mpdf\Mpdf([
            'tempDir' => __DIR__ . '/tmp',
            'mode' => 'utf-8',
            'format' => [215, 279],
            'default_font_size' => 12,
            'default_font' => "Arial",
            'orientation' => 'L'
        ]);
        
        foreach($datosArray as $key => $registros){   
            $paginaParaElReporteGeneral = $key + 1;
            $mpdf->AddPageByArray([
                'margin-left' => 20,
                'margin-right' => 20,
                'margin-top' => 0,
                'margin-bottom' => 0,
            ]);
            // $mpdf->Image(__DIR__ . '/../PlantillaPDF/FormatoCartaPresentacion.png', $x = 0, $y = 0, 215, 279, $type = 'png','',TRUE,FALSE);

            $mpdf->SetXY($x = 20, $y = 20);
            $styles = "<style type='text/css'>  table{ font-size: 12px;} table td{ border: 1px solid #B9B9B9;padding:5px;}</style>";
            $mpdf->WriteHtml($styles);
            $mpdf->shrink_tables_to_fit = 1;
            $title = "<div style='text-align:center'><b>INFORME CONSOLIDADO FORMAS DE PAGOS NO EFECTIVAS</b></div>";
            $title .= "<div style='text-align:center'><b>$descripcionCentroDeAtencion</b></div>";
            $title .= "<div style='text-align:center'><b>$fecha</b></div>";
            $title .= "<div style='text-align:left;font-size:8px;'>Página:$key</div><hr/>";
            $mpdf->WriteHtml($title);

            $table = "<page><div>";
            $table .= "<table cellspacing='0' style='overflow:wrap;width:100%;'><thead><tr><td>Nombre Cajero</td><td>Punto</td><td>Forma de Pago</td><td>Total</td><td>Cant.</td><td>Vouchers</td></tr></thead>";
            $table .= "<tbody>";

            foreach($registros as $dato){
                $table .= "<tr><td>".$dato['datos']['CAJERO']."</td><td>".$dato['datos']['Name']."</td><td>".$dato['datos']['descripcion']."</td><td>".number_format($dato['datos']['total'])."</td><td>".$dato['cantidad']."</td><td style='width:40%;'>".$dato['voucher']."</td></tr>";
            
            }
            $table .= "</tbody>";
            $table .= "</table>";
            $table .= "</div></page>";
            $mpdf->WriteHtml($table);
        }

        //Imprimir en una nueva hoja el reporte General y la firma
        $mpdf->AddPageByArray([
            'margin-left' => 20,
            'margin-right' => 20,
            'margin-top' => 0,
            'margin-bottom' => 0,
        ]);

        $mpdf->SetXY($x = 20, $y = 20);

        $titulo = "<div style='text-align:center'><b>INFORME CONSOLIDADO FORMAS DE PAGOS NO EFECTIVAS</b></div>";
        $titulo .= "<div style='text-align:center'><b>$descripcionCentroDeAtencion</b></div>";
        $titulo .= "<div style='text-align:center'><b>$fecha</b></div>";
        $titulo .= "<div style='text-align:left;font-size:8px;'>Página:$paginaParaElReporteGeneral</div><hr/>";
        $mpdf->WriteHtml($titulo);

        $tableReporteGeneral = "<page><div>";
        $tableReporteGeneral .= "<table cellspacing='0' style='overflow:wrap;width:100%;'><thead><tr><td>Forma de Pago</td><td>Cantidad</td><td>Total</td></tr></thead>";
        $tableReporteGeneral .= "<tbody>";
        foreach($reporteGeneral as $fila)
        {
            $tableReporteGeneral .= "<tr><td>".$fila['DESCRIPCION']."</td><td>".$fila['CANTIDAD']."</td><td>".number_format($fila['TOTAL'])."</td></tr>";
        }

        $tableReporteGeneral .= "<tr><td colspan='3' style='border:none;padding-top: 70px;'><b>Firma Supervisor(a) de Caja:</b>&nbsp;&nbsp;&nbsp;__________________________________________</td></tr>";

        $tableReporteGeneral .= "</tbody>";
        $tableReporteGeneral .= "</table>";
        $tableReporteGeneral .= "</div></page>";
        $mpdf->WriteHtml($tableReporteGeneral);

        $mpdf->Output(__DIR__ . "/tmp/tarjetas","F"); 

        $data = \base64_encode(\file_get_contents(__DIR__ . "/tmp/tarjetas"));

        return $data;
    }

    /**
    * @FOS\Get("/gettbsubesp", name="voucher-tbsubesp",options={"method_prefix" = false})
    */
    public function getTbsubespAction(Request $request)
    {
        $fecha = $request->get('fecha');
        $valor = $request->get('valor');
        $login = $request->get('login');

        $tbsubespArray = $this->get(mufService::class)->getTbsubespByFechaAndValorDescuento($fecha,$valor);
        $valores = array();
        
        foreach($tbsubespArray as $tbsubesp){
            if(!empty($tbsubesp)){
                $voucherIsValid = $this->getRepository()->existeVoucherTblGndTndrByAuth($tbsubesp["ID"]);
                if(empty($voucherIsValid)){
                    $valores[]= array(
                        "voucher" => $tbsubesp["ID"],
                        "cliente" => $datos = array(
                                        "fecha" =>  $tbsubesp["FECHA"],
                                        "nombre" =>  mb_convert_encoding($tbsubesp["NOMBRE"],'UTF-8','auto'),
                                        "documento" =>  $tbsubesp["CUNUMID"],
                                        "total" =>  $tbsubesp["VALOR_TAR"],
                                        "descuento" =>  $tbsubesp["VALOR_DES"]
                                    )
                    );
                }
            }
        }
        $respuesta = array(
            'data'=>$valores
        );

        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
    * @FOS\Get("/getclientetbsubesp", name="cliente-tbsubesp",options={"method_prefix" = false})
    */
    public function getClienteTbsubespAction(Request $request)
    {
        $voucher = $request->get('voucher');
       
        $tbsubespArray = $this->get(mufService::class)->getClienteTbsubesp($voucher);
       
        $valores = array();
        foreach($tbsubespArray as $tbsubesp){
            if(!empty($tbsubesp)){
                $empleadoArray = $this->getManager()->getRepository("AppBundle:Empleado")->findByNickName($tbsubesp["USERNAME"]);
                $empleadoObject = !empty($empleadoArray) ? array_pop($empleadoArray) : $empleadoArray;

                $valores[]= array(
                    "fecha" =>  $tbsubesp["FECHA"],
                    "nombre" =>  mb_convert_encoding($tbsubesp["NOMBRE"],'UTF-8','auto'),
                    "documento" =>  $tbsubesp["CUNUMID"],
                    "total" =>  $tbsubesp["VALOR_TAR"],
                    "descuento" =>  $tbsubesp["VALOR_DES"],
                    "cajero" =>  $empleadoObject->getFirstName()." ".$empleadoObject->getLastName()
                );
            }
        }
      
       $respuesta = array(
            'data'=>$valores
        );

       $view = $this->view($respuesta,200);
       return $this->handleView($view);
    }

    /**
    * @FOS\POST("/actualizartblGndTndr", name="actualizar-tblGndTndr",options={"method_prefix" = false})
    */
    public function actualizarTblGndTndrAction(Request $request)
    {
        $cuenta = $request->get("cuenta");
        $voucher = $request->get("voucher");
        $fecha = $request->get("fecha");
        $auth = $request->get("auth");
        $descuento = $request->get("descuento");
        $nickName = $request->get("nickname");
        $id = $request->get("id");

        $sql = "UPDATE [dbInventario].[dbo].tblGndTndr SET AUTH= :voucher WHERE DATE= :fecha AND [CHECK]= :cuenta AND AUTH= :auth  AND ID= :id AND TYPE = 1 AND TYPEID = 18";
        
        $params = array(
            'voucher' => $voucher,
            'fecha' => $fecha,
            'cuenta' => $cuenta,
            'auth' => $auth,
            'id' => $id
        );

        $em = $this->getManager();
        $stmt = $this->getManager()->getConnection()->prepare($sql);
        $num_rows_effected = $stmt->execute($params);

        $createdAt = new \Datetime('now', new \DateTimezone('America/Lima'));
        $login = $this->getUser()->getUserName();
        $fpago = $this->getManager()->getRepository("AppBundle:TblFPagos")->find(18);
        $empleadoArray = $this->getManager()->getRepository("AppBundle:Empleado")->findByNickName($nickName);
        $empleadoObject = !empty($empleadoArray) ? array_pop($empleadoArray) : $empleadoArray;
        $respuesta = array();
        if($num_rows_effected){
            $observacion = "Correcion de voucher errado: ". $auth . ", por: ". $voucher;
            $ventaHistorial = new VentaHistorial();
            $ventaHistorial->setIdSec($cuenta);
            $ventaHistorial->setFecha($fecha);
            $ventaHistorial->setCuenta($cuenta);
            $ventaHistorial->setEmpleado($empleadoObject);
            $ventaHistorial->setFpagonew($fpago);
            $ventaHistorial->setFpagoold($fpago);
            $ventaHistorial->setValornew($descuento);
            $ventaHistorial->setValorold($descuento);
            $ventaHistorial->setObservacion($observacion);
            $ventaHistorial->setCreatedAt($createdAt);
            $ventaHistorial->setLogin($login);

            $em->persist($ventaHistorial);
            $flush = $em->flush();

            if($flush == null){
                $respuesta = array(
                    'data'=> $num_rows_effected
                );
            }
        }

       $view = $this->view($respuesta,200);
       return $this->handleView($view);
    }

    /**
    * @FOS\POST("/inactivartbsubesp", name="inactivar-tbsubesp",options={"method_prefix" = false})
    */
    public function inactivarTbSubEspAction(Request $request)
    {
        $id = $request->get("id");
        $login = $this->getUser()->getUserName();

        $num_rows_effected =  $this->get(mufService::class)->inactivarIDTbSubEsp($id,$login);
    
        $respuesta = array();
        if($num_rows_effected){
            $respuesta = array(
                'data'=> $num_rows_effected
            );
        }

       $view = $this->view($respuesta,200);
       return $this->handleView($view);
    }

    /**
    * @FOS\Get("/reportesubsidiosenespeciealoha", name="reporte-subsidioenespeciealoha",options={"method_prefix" = false})
    */
    public function reporteSubsidioEnEspecieAlohaAction(Request $request)
    {
        $desde = $request->get('desde');
        $hasta = $request->get('hasta');
      
        $voucherEnBdmufTbsubesp = $this->get(mufService::class)->getDatosVoucherSubsidioEnEspecieTbsubespByRangoFechas($desde,$hasta);
       
        $valores = array();

        if(!empty($voucherEnBdmufTbsubesp)){
            foreach($voucherEnBdmufTbsubesp as $voucher){
                $voucherEnTblGndTndrArray = $this->getRepository()->existeVoucherTblGndTndrByAuth($voucher["ID"]);

                
                $cuenta = !empty($voucherEnTblGndTndrArray) ? $voucherEnTblGndTndrArray[0]["CUENTA"]: "";
                $fechaNacimiento = new DateTime($voucher["CUFECNACI"]);
                $empleadoArray = $this->getManager()->getRepository("AppBundle:Empleado")->findByNickName($voucher["USERNAME"]);
                $empleadoObject = !empty($empleadoArray) ? array_pop($empleadoArray) : $empleadoArray;

                $valores[] = array(
                    "voucher" => $voucher["ID"],
                    "fecha" => $voucher["FECHA"],
                    "nombre" => mb_convert_encoding($voucher["NOMBRE"], 'UTF-8', 'UTF-8'),
                    "documento" => $voucher["CUNUMID"],
                    "total" => $voucher["VALOR_TAR"],
                    "descuento" => $voucher["VALOR_DES"],
                    "porcentaje" => $voucher["PORCENTAJE"],
                    "categoria" => $voucher["CATEGORIA"],
                    "genero" => $voucher["CUGENERO"],
                    "fechaNacimiento" => $fechaNacimiento->format('Y-m-d'),
                    "cuenta" => $cuenta,
                    "cajero" => $empleadoObject->getFirstName()." ".$empleadoObject->getLastName()
                );
            }
        }

        $respuesta = array(
            'data'=>$valores
        );

       $view = $this->view($respuesta,200);
       return $this->handleView($view);
    }

    /**
    * @FOS\Get("/getcierrebyid", name="getcierrebyid",options={"method_prefix" = false})
    */
    public function getCierreByIdAction(Request $request){
        $id = $request->get('id');

        $cierreObject = $this->getRepository()->find($id);

        $view = $this->view($cierreObject,200);
        return $this->handleView($view);
    }

    /**
    * @FOS\Get("/entradasreservas", name="entradas-reservas",options={"method_prefix" = false})
    */
    public function getEntradasReservasAction(Request $request){
        $fecha = $request->get('fecha');
        $totalPersonasIngresadasEnElParque = $this->get(mufService::class)->getTotalPersonasIngresadasParqueRecreacional($fecha);
        $totalPersonasConEntradaReservadaPeroSinIngresarEnElParque = $this->get(mufService::class)->getTotalPersonasConEntradaReservadaPeroSinIngresarParqueRecreacional($fecha);
        $totalPersonasConReservaIngresadasEnElParque = $this->get(mufService::class)->getTotalPersonasConReservaIngresadasParqueRecreacional($fecha);
     
        $respuesta = [
            "labels" => ["Personas Ingresadas","Personas con Reservas sin Ingresar","Personas con Reservas ya Ingresadas"],
            "data" => [
                $totalPersonasIngresadasEnElParque[0]["CANTIDAD"],
                $totalPersonasConEntradaReservadaPeroSinIngresarEnElParque[0]["CANTIDAD"],
                $totalPersonasConReservaIngresadasEnElParque[0]["CANTIDAD"]
            ]
        ];
        
        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
    * @FOS\Get("/restaurantesreservas", name="restaurantes-reservas",options={"method_prefix" = false})
    */
    public function getRestaurantesReservasAction(Request $request){
        $fecha = $request->get('fecha');

        $totalReservasServiciosRestaurantes = $this->get(mufService::class)->getTotalReservasServiciosRestaurantes($fecha);
        $totalReservasServiciosRestaurantesYaIngresadosEnElParque = $this->get(mufService::class)->getTotalReservasServiciosRestaurantesYaIngresadosEnElParque($fecha);
        $getTotalRedimidosServiciosRestaurantes = $this->get(mufService::class)->getTotalRedimidosServiciosRestaurantes($fecha);
        $respuesta = [
            "labels" => ["Total Reservas","Con Reserva e Ingresados al Parque","Servicios Redimidos","Ingresados en el Parque Sin Redimir el Servicio"],
            "data" => [
                $totalReservasServiciosRestaurantes[0]["CANTIDAD"],
                $totalReservasServiciosRestaurantesYaIngresadosEnElParque[0]["CANTIDAD"],
                $getTotalRedimidosServiciosRestaurantes[0]["CANTIDAD"],
                $totalReservasServiciosRestaurantesYaIngresadosEnElParque[0]["CANTIDAD"] - $getTotalRedimidosServiciosRestaurantes[0]["CANTIDAD"]
            ]
        ];
        
        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
    * @FOS\Get("/parqueaderoreservas", name="parqueadero-reservas",options={"method_prefix" = false})
    */
    public function getParqueaderoReservasAction(Request $request){
        $fecha = $request->get('fecha');

        $totalParqueaderosReservados = $this->get(mufService::class)->getTotalParqueaderoReservados($fecha);
        $totalParqueaderosReservadosYaIngresadosEnElParque = $this->get(mufService::class)->getTotalParqueaderoReservadosYaIngresados($fecha);
        $totalParqueaderosReservadosQueNoHanIngresado =  $totalParqueaderosReservados[0]["CANTIDAD"] - $totalParqueaderosReservadosYaIngresadosEnElParque[0]["CANTIDAD"];
        $respuesta = [
            "labels" => ["Total Reservas","Con Reserva e Ingresados al Parque","Reservados Sin Ingresar"],
            "data" => [
                $totalParqueaderosReservados[0]["CANTIDAD"],
                $totalParqueaderosReservadosYaIngresadosEnElParque[0]["CANTIDAD"],
                $totalParqueaderosReservadosQueNoHanIngresado
            ]
        ];
        
        $view = $this->view($respuesta,200);
        return $this->handleView($view);
    }

    /**
    * @FOS\Get("/micomfamiliar", name="micomfamiliar",options={"method_prefix" = false})
    */
    public function getMicomfamiliarAction(Request $request){
        $documento = trim($request->get('documento'));
        $response = [];
        if($documento){
            $urlApi = "https://muf.comfamiliar.com/api/micomfamiliar/entradas_pendientes_redimir/" . $documento;
            $responseMicomfamiliar = file_get_contents($urlApi);
            $response = json_decode($responseMicomfamiliar,true);
        }
       
        $view = $this->view($response,200);
        return $this->handleView($view);
    } 
    
    /**
    * @FOS\Get("/micomfamiliar/{consecutivo}", name="micomfamiliar-consecutivo",options={"method_prefix" = false})
    */
    public function getMicomfamiliarConsecutivoAction($consecutivo){
        $response = [];
        if($consecutivo){
            $params= ["consecutivo" => $consecutivo];
            $defaults = array(
                        CURLOPT_URL => 'https://muf.comfamiliar.com/api/micomfamiliar/generarpdfqrBoletas',
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => json_encode($params),
                        CURLOPT_HTTPHEADER => ['Content-Type:application/json'],
                        CURLOPT_RETURNTRANSFER => true
                    );
            $ch = curl_init();
            curl_setopt_array($ch,  $defaults);
            $result = curl_exec($ch);
            curl_close($ch);
            
            $response = json_decode($result,true);
        }
       
        $view = $this->view($response,200);
        return $this->handleView($view);
    }   
}


