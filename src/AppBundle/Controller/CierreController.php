<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Cierre;
use AppBundle\Form\CierreType;
use AppBundle\Entity\Punto;
use AppBundle\Entity\CierreTarjeta;

use AppBundle\Util\Ambiente;

/**
 * @Route("/cajero")
 */
class CierreController extends Controller
{
    private $session;

    public function __construct(){
        $this->session = New Session();
    }

    public function getManager(){
        return $this->getDoctrine()->getManager();
    }

    public function getRepository(){
        return $this->getManager()->getRepository("AppBundle:Cierre");
    }

    /**
     * @Route("/autorizardenominaciones", name="autorizardenominaciones")
     */
    public function autorizarAction(){  
        return $this->render("AppBundle:Cajero:autorizardenominaciones.html.twig",array(
        ));
    }

    /**
     * @Route("/consultadecajas", name="consultadecajas")
     */
    public function modificarAction(){
        return $this->render("AppBundle:Cajero:consultadecajas.html.twig",array(
        ));
    }

    /**
     * @Route("/cierrescondiferencias", name="cierrescondiferencias")
     */
    public function cierresconDiferenciaAction(){
        return $this->render("AppBundle:Cajero:cierrescondiferencia.html.twig",array(
        ));
    }

  
    /**
     * @Route("/consultacaja", name="consultacaja")
     */
    public function consultarAction(Request $request)
    {
        $paginator = $this->get('knp_paginator');
        $cajas = $this->getRepository()->listar();

        $pagination = $paginator->paginate(
            $cajas, 
            $request->query->getInt('page', 1),
            10
        );

        return $this->render("AppBundle:Cajero:consultacaja.html.twig",array(
            "pagination"=>$pagination
        ));
    }

    /**
     * @Route("/cierreparcialdecaja", name="cierreparcialdecaja")
     */
    public function addAction(Request $request)
    {
        $ccajero = new Cierre();

        if (!empty($request->get("btonCierreCaja")))
        {
            $fecha = $request->get("fecha");
            $login = $this->getUser()->getUserName();
            $punto = $this->getManager()->getRepository("AppBundle:Terminal")->find($request->get("terminal"));

            if($this->getRepository()->validarCierre($fecha,$punto,$login))
            {   
                $em = $this->getManager();
                $empleado = $em->getRepository("AppBundle:Empleado")->findOneByNickName($login);
                if ($empleado)
                {
                    $ccajero->setFecha($fecha);
                    $ccajero->setTerminal($punto);

                    $digitado = $request->get("valorEfectivo");
                    $ccajero->setDigitado($digitado);

                    $ccajero->setObservacion("");

                    $usuario = $this->getUser()->getNombre();
                    $ccajero->setNameUser($usuario);

                    $createdAt = new \Datetime('now', new \DateTimezone('America/Lima'));
                    $ccajero->setCreatedAt($createdAt);
                    $ccajero->setUpdatedAt($createdAt);

                    
                    $ccajero->setEmpleado($empleado);
                    $ccajero->setUserAuditoria($login);

                    $empleado_id = $empleado->getId();
                    $real = $this->getRepository()->getEfectivoReal($fecha,$empleado_id,$punto->getId());
                    $diferencia = $digitado - $real ;
                    $ccajero->setDiferencia($diferencia);

                    $motivo = $em->getRepository("AppBundle:Motivo")->findOneByCodigo(Ambiente::ACTIVO);
                    $ccajero->setMotivo($motivo);

                    $documento = $this->getUser()->getCodigo();
                    $ccajero->setDocumento($documento);
                
                    $em->persist($ccajero);
                    $flush = $em->flush();

                    //*******************************GUARDAR LAS TARJETAS
                    $tarjetasArray = $request->get("tarjetas");
                    foreach($tarjetasArray as $key => $tarjeta){
                        $cierreTarjetaObject = new CierreTarjeta();
                        $cierreTarjetaObject->setCierre($ccajero);
                        $cierreTarjetaObject->setFormaPago($tarjeta["formapago"]);
                        $cierreTarjetaObject->setCantidad($tarjeta["cantidad"]);
                        $cierreTarjetaObject->setTotal($tarjeta["total"]);
                        $cierreTarjetaObject->setCreatedAt($createdAt);
                        $cierreTarjetaObject->setUpdatedAt($createdAt);
                        $cierreTarjetaObject->setUserAuditoria($login);
                        $em->persist($cierreTarjetaObject);
                        $em->flush();  
                    }
                    //*************************************************+ */
                    if ($flush == null)
                    {
                        return $this->redirectToRoute("consultadecajas");
                    }
                    else
                    {
                        $status="Error al Intentar Guardar el Registro";
                    }
                }
                else
                {
                    $status="Imposible Guardar.Comunicarse con Administrador del sistema, Usuario sin Nombre Corto";        
                }
            }else{
                $status="Imposible Guardar.Comunicarse con Supervisora de caja para modificar denominaciones, Ya existe un cierre parcial para este punto!";        
            }
        $this->session->getFlashBag()->add("status",$status);    
        }

        $terminalRepository = $this->getManager()->getRepository("AppBundle:Terminal");
        $terminalesObject = $terminalRepository->findAll();
        return $this->render("AppBundle:Cajero:cierretotaldecaja.html.twig",array(
            "terminales"=>$terminalesObject
        ));
    }

    /**
     * @Route("/tirilla/{id}", name="tirilla")
     */
    public function printAction($id)
    {
        $tirilla = $this->getRepository()->find($id);
        $cierreTarjetaObject = $this->getManager()->getRepository("AppBundle:CierreTarjeta")->findByCierre($id);

        $pdf = $this->get("fpdf");
        $pdf = new \FPDF('P','mm',array(72,110));
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetMargins(1, 1);
        $pdf->Ln(-8);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(0,4,'CIERRE PARCIAL',0,0,'C');
        $pdf->Ln(4);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(0,4,'COMFAMILIAR RISARALDA',0,0,'C');
        $pdf->SetMargins(7, 1);
        $pdf->Ln(6);
        $pdf->Cell(25,4,utf8_decode('Consecutivo:'), 0, 0, 'L');
        $pdf->Cell(33,4,$tirilla->getId(),0,0,'L');
        $pdf->Ln(4);
        $pdf->Cell(25,4,utf8_decode('Fecha: '), 0, 0, 'J');
        $pdf->Cell(33,4,utf8_decode($tirilla->getFecha()), 0, 0, 'J');
        $pdf->Ln(4);
        $pdf->Cell(25,4,utf8_decode('Elaborado por: '), 0, 0, 'J');
        $pdf->Cell(33,4,utf8_decode($tirilla->getNameUser()), 0, 0, 'J');
        $pdf->Ln(4);
        $pdf->Cell(25,4,utf8_decode('Punto: '), 0, 0, 'J');
        $pdf->Cell(33,4,utf8_decode($tirilla->getTerminal()->getName()), 0, 0, 'J');
        $pdf->Ln(4);
        $pdf->Cell(25,4,utf8_decode('Valor Digitado: '), 0, 0, 'J');
        $pdf->Cell(33,4,number_format($tirilla->getDigitado()), 0, 0, 'J');
        $pdf->Ln(4);
        $pdf->Cell(25,4,utf8_decode('Motivo: '), 0, 0, 'J');
        $pdf->Cell(33,4,utf8_decode($tirilla->getMotivo()), 0, 0, 'J');
        $pdf->Ln(4);
    //************************************************ */
        if(!empty($cierreTarjetaObject)){
            //Headers
            $pdf->Cell(20,4,"Forma Pago",1);
            $pdf->Cell(20,4,"Cantidad",1);
            $pdf->Cell(20,4,"Total",1);
            foreach($cierreTarjetaObject as $cierreTarjeta){
                if($cierreTarjeta->getCantidad() > 0 and $cierreTarjeta->getTotal() > 0){
                    $pdf->Ln();
                    $pdf->Cell(20,4,Ambiente::$TARJETASARRAY[$cierreTarjeta->getFormaPago()],1);
                    $pdf->Cell(20,4,$cierreTarjeta->getCantidad(),1,0,'C');
                    $pdf->Cell(20,4,number_format($cierreTarjeta->getTotal()),1);
                }
            }
        }
    //************************************************ */
        $pdf->Ln(4);
        $pdf->Cell(25,4,utf8_decode('Firma: '), 0, 0, 'J');
        $pdf->Ln(8);
        $pdf->Cell(25,4,utf8_decode('Recibido por: '), 0, 0, 'J');
        $pdf->Ln(8);
        $pdf->MultiCell(0,4,utf8_decode('En caso de faltantes autorizo me sea descontado dicho valor por nomina.'), 0,'J');
        $pdf->MultiCell(0,4,utf8_decode('Nota: Pendiente de ejecutar el fin de día para el cálculo de las diferencias.'), 0,'J');

        return new Response($pdf->Output(), 200, array(
            'Content-Type' => 'application/pdf'));
    }

}   