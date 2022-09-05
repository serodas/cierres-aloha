<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Cierre;
use AppBundle\Entity\Punto;


/**
 * @Route("/reporte")
 */
class ReporteController extends Controller
{
   
    public function getManager(){
        return $this->getDoctrine()->getManager();
    }

    public function getRepository(){
        return $this->getManager()->getRepository("AppBundle:Cierre");
    }

    /**
     * @Route("/formreporte", name="frmreporte")
     */
    public function frmReporteAction()
    {
        return $this->render("AppBundle:Reportes:reporteefectivo.html.twig",array( 
        ));
    }

     /**
     * @Route("/formreportenoefectivas", name="frmreporte-noefectivas")
     */
    public function frmReporteFPNoEfectivasAction()
    {
        return $this->render("AppBundle:Reportes:reportenoefectivas.html.twig",array( 
        ));
    }

     /**
     * @Route("/formreportesubsidioenespecie", name="formreportesubsidioenespecie")
     */
    public function frmReporteSubsidioEnEspecieAction()
    {
        return $this->render("AppBundle:Reportes:reportesubsidioenespecie.html.twig",array( 
        ));
    }

     /**
     * @Route("/reportereservas", name="formreporte-reservas")
     */
    public function frmReporteReservasAction()
    {
        return $this->render("AppBundle:Reportes:reportereservas.html.twig",array( 
        ));
    }

     /**
     * @Route("/reportemicomfamiliar", name="formreporte-micomfamiliar")
     */
    public function frmReporteMicomfamiliarAction()
    {
        return $this->render("AppBundle:Reportes:reportemicomfamiliar.html.twig",array( 
        ));
    }

    /**
     * @Route("/efectivo/{fecha}", name="reporte-efectivo")
     */
    public function reporteEfectivoDetalladoAction($fecha)
    {
        $totalreal= 0;
        $totaldigitado = 0;
        $sobrantes = 0;
        $faltantes = 0;

        $reporte =$this->getRepository()->ReporteDetalleFormadePagoEfectivo($fecha);

        $pdf = $this->get("fpdf");
        $pdf = new \FPDF('L','mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(70);


        if(count($reporte) > 0)
        {
            $pdf->Cell(120,10,'INFORME CONSOLIDADO FORMAS DE PAGOS EFECTIVAS',0,0,'C');
            $pdf->Ln(6);
            $pdf->Cell(70);
            $pdf->Cell(120,10,'ALOHA FACTURACION',0,0,'C');
            $pdf->Ln(6);
            $pdf->Cell(70);
            $pdf->Cell(120,10,$fecha,0,0,'C');
            $pdf->Ln(15);

            //Headers
            $pdf->Cell(55,7,"Nombre Cajero",1);
            $pdf->Cell(25,7,"Cedula",1);
            $pdf->Cell(30,7,"Punto",1);
            $pdf->Cell(30,7,"Valor Real",1);
            $pdf->Cell(30,7,"Valor Digitado",1);
            $pdf->Cell(25,7,"Diferencia",1);
            $pdf->Cell(25,7,"Terminal",1);
            $pdf->Cell(30,7,"Usuario Aloha",1);

            for($i=0;$i<count($reporte);$i++)
            {
                $real = $reporte[$i]["real"] * 1;
                $totalreal = $totalreal + $real;

                $digitado=$reporte[$i]["digitado"] * 1;
                $totaldigitado = $totaldigitado + $digitado;
                
                $diferencia = $reporte[$i]["diferencia"] * 1;

                if($diferencia > 0){
                    $sobrantes = $sobrantes + $diferencia;
                }
                if($diferencia<0){
                    $faltantes = $faltantes + $diferencia;
                }

                $pdf->Ln();
                $pdf->SetFont('Arial','',9);
                $pdf->Cell(55,7,$reporte[$i]["name_user"],1);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(25,7,$reporte[$i]["documento"],1);
                $pdf->Cell(30,7,$reporte[$i]["Name"],1);
                $pdf->Cell(30,7,number_format($real),1);
                $pdf->Cell(30,7,number_format($digitado),1);
                $pdf->Cell(25,7,number_format($diferencia),1);
                $pdf->Cell(25,7,$reporte[$i]["terminal"],1);
                $pdf->Cell(30,7,$reporte[$i]["EMPLOYEE"],1);
            }

            $pdf->Ln(15);
            $pdf->Cell(45,4,utf8_decode('TOTAL VALOR REAL:'), 0, 0, 'J');
            $pdf->Cell(33,4,number_format($totalreal), 0, 0, 'J');
            $pdf->Ln(6);
            $pdf->Cell(45,4,utf8_decode('TOTAL ENTREGADO:'), 0, 0, 'J');
            $pdf->Cell(33,4,number_format($totaldigitado), 0, 0, 'J');
            $pdf->Ln(6);
            $pdf->Cell(45,4,utf8_decode('TOTAL SOBRANTES:'), 0, 0, 'J');
            $pdf->Cell(33,4,number_format($sobrantes), 0, 0, 'J');
            $pdf->Ln(6);
            $pdf->Cell(45,4,utf8_decode('TOTAL FALTANTES:'), 0, 0, 'J');
            $pdf->Cell(33,4,number_format($faltantes), 0, 0, 'J');
            $pdf->Ln(50);
            $pdf->Cell(45,4,'FISCAL DE CAJA:',0,0,'J');
            $pdf->Ln(10);
            $pdf->Cell(45,4,'________________________________',0,0,'J');
            $pdf->Ln(6);
            $pdf->Cell(45,4,'Firma',0,0,'J');
        }
        else
        {
        $pdf->Cell(60,10,'Por favor recuerde ejecutar VBCONVERT',0,0,'C');
        }        

        return new Response($pdf->Output(), 200, array(
            'Content-Type' => 'application/pdf')
        );
    }

    /**
     * @Route("/noefectivas/{fecha}", name="reporte-noefectivas")
     */
    public function ReporteNoEfectivas($fecha)
    {
        $totalvalores = 0;
        $totalcantidades=0;

        $pdf = $this->get("fpdf");
        $pdf = new \FPDF('P','mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(70);

        $reporte = $this->getRepository()->ReporteDetalleFormadePagoNoEfectivas($fecha);
        $porformadepago = $this->getRepository()->ReporteGeneralFormadePagoNoEfectivas($fecha);
        #var_dump($reporte);
        #die;

        if(count($reporte) > 0)
        {
            $pdf->Cell(60,10,'INFORME CONSOLIDADO FORMAS DE PAGOS NO EFECTIVAS',0,0,'C');
            $pdf->Ln(6);
            $pdf->Cell(70);
            $pdf->Cell(60,10,'PARQUE RECREACIONAL',0,0,'C');
            $pdf->Ln(6);
            $pdf->Cell(70);
            $pdf->Cell(60,10,$fecha,0,0,'C');
            $pdf->Ln(15);

            //Headers
            $pdf->Cell(55,7,"Nombre Cajero",1);
            $pdf->Cell(40,7,"Punto",1);
            $pdf->Cell(55,7,"Forma de Pago",1);
            $pdf->Cell(20,7,"Cantidad",1);
            $pdf->Cell(20,7,"Total",1);

            for($i=0; $i< count($reporte); $i++)
            {   
               
                $cajero = $reporte[$i]["CAJERO"];
                $codigo = $reporte[$i]["Name"];

                $descripcion = $reporte[$i]["descripcion"];

                $cantidad = $reporte[$i]["cantidad"];
                $totalcantidades = $totalcantidades + $cantidad;

                $total = $reporte[$i]["total"];
                $totalvalores = $totalvalores + $total;  
                
                $pdf->Ln();
                $pdf->SetFont('Arial','',9);
                $pdf->Cell(55,7,utf8_decode($cajero),1);
                $pdf->Cell(40,7,$codigo,1);
                $pdf->SetFont('Arial','',8);
                $pdf->Cell(55,7,$descripcion,1);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(20,7,$cantidad,1);
                $pdf->Cell(20,7,number_format($total),1);

            }

            $pdf->Ln(15);
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(55,7,"Forma de Pago",1);
            $pdf->Cell(20,7,"Cantidad",1);
            $pdf->Cell(20,7,"Total",1);

            for($j=0;$j<count($porformadepago);$j++)
            {
                $pdf->Ln();
                $pdf->SetFont('Arial','',8);
                $pdf->Cell(55,7,$porformadepago[$j]["descripcion"],1);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(20,7,$porformadepago[$j]["cantidad"],1);
                $pdf->Cell(20,7,number_format($porformadepago[$j]["total"]),1);
            }

                $pdf->Ln(15);
                $pdf->Cell(45,4,utf8_decode('TOTAL:'), 0, 0, 'J');
                $pdf->Cell(33,4,number_format($totalvalores), 0, 0, 'J');
                $pdf->Ln(6);
                $pdf->Cell(45,4,utf8_decode('TOTAL CANTIDAD:'), 0, 0, 'J');
                $pdf->Cell(33,4,utf8_decode($totalcantidades), 0, 0, 'J');
                $pdf->Ln(70);
                $pdf->Cell(45,4,'FISCAL DE CAJA:',0,0,'J');
                $pdf->Ln(10);
                $pdf->Cell(45,4,'________________________________',0,0,'J');
                $pdf->Ln(6);
                $pdf->Cell(45,4,'Firma',0,0,'J');
        }else{
            $pdf->Cell(60,10,'Por favor recuerde ejecutar la interface de ventas',0,0,'C');
        }          

        return new Response($pdf->Output(), 200, array(
            'Content-Type' => 'application/pdf')
        );
    }

    /**
    * @Route("/productosvendidosconsolidado", name="productosvendidosconsolidado")
    */
    public function ReporteProductosVendidosConsolidado()
    {   
        return $this->render("AppBundle:Reportes:reporteconsolidado.html.twig",array(
        ));
    }

     /**
    * @Route("/frmcafeteriacentro", name="frm-cafeteriacentro")
    */
    public function ReporteCafeteriaCentro()
    {   
        return $this->render("AppBundle:Reportes:reportecafeteriacentro.html.twig",array(
        ));
    }

    /**
     * @Route("/cafeteriacentro/{fecha}", name="reporte-cafeteriacentro")
     */
    public function reporteCafeteriaCentroAction($fecha)
    {
        $totalreal= 0;
        $totaldigitado = 0;
        $sobrantes = 0;
        $faltantes = 0;

        $reporte =$this->getRepository()->ReporteDetalleEfectivoCafeteriaCentro($fecha);

        $pdf = $this->get("fpdf");
        $pdf = new \FPDF('L','mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(70);


        if(count($reporte) > 0)
        {
            $pdf->Cell(120,10,'INFORME CONSOLIDADO FORMAS DE PAGOS EFECTIVAS',0,0,'C');
            $pdf->Ln(6);
            $pdf->Cell(70);
            $pdf->Cell(120,10,'CAFETERIA CENTRO',0,0,'C');
            $pdf->Ln(6);
            $pdf->Cell(70);
            $pdf->Cell(120,10,$fecha,0,0,'C');
            $pdf->Ln(15);

            //Headers
            $pdf->Cell(55,7,"Nombre Cajero",1);
            $pdf->Cell(25,7,"Cedula",1);
            $pdf->Cell(30,7,"Punto",1);
            $pdf->Cell(30,7,"Valor Real",1);
            $pdf->Cell(30,7,"Valor Digitado",1);
            $pdf->Cell(25,7,"Diferencia",1);
            $pdf->Cell(25,7,"Terminal",1);
            $pdf->Cell(30,7,"Usuario Aloha",1);

            for($i=0;$i<count($reporte);$i++)
            {
                $real = $reporte[$i]["real"] * 1;
                $totalreal = $totalreal + $real;

                $digitado=$reporte[$i]["digitado"] * 1;
                $totaldigitado = $totaldigitado + $digitado;
                
                $diferencia = $reporte[$i]["diferencia"] * 1;

                if($diferencia > 0){
                    $sobrantes = $sobrantes + $diferencia;
                }
                if($diferencia<0){
                    $faltantes = $faltantes + $diferencia;
                }

                $pdf->Ln();
                $pdf->SetFont('Arial','',9);
                $pdf->Cell(55,7,$reporte[$i]["name_user"],1);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(25,7,$reporte[$i]["documento"],1);
                $pdf->Cell(30,7,$reporte[$i]["Name"],1);
                $pdf->Cell(30,7,number_format($real),1);
                $pdf->Cell(30,7,number_format($digitado),1);
                $pdf->Cell(25,7,number_format($diferencia),1);
                $pdf->Cell(25,7,$reporte[$i]["terminal"],1);
                $pdf->Cell(30,7,$reporte[$i]["EMPLOYEE"],1);
            }

            $pdf->Ln(15);
            $pdf->Cell(45,4,utf8_decode('TOTAL VALOR REAL:'), 0, 0, 'J');
            $pdf->Cell(33,4,number_format($totalreal), 0, 0, 'J');
            $pdf->Ln(6);
            $pdf->Cell(45,4,utf8_decode('TOTAL ENTREGADO:'), 0, 0, 'J');
            $pdf->Cell(33,4,number_format($totaldigitado), 0, 0, 'J');
            $pdf->Ln(6);
            $pdf->Cell(45,4,utf8_decode('TOTAL SOBRANTES:'), 0, 0, 'J');
            $pdf->Cell(33,4,number_format($sobrantes), 0, 0, 'J');
            $pdf->Ln(6);
            $pdf->Cell(45,4,utf8_decode('TOTAL FALTANTES:'), 0, 0, 'J');
            $pdf->Cell(33,4,number_format($faltantes), 0, 0, 'J');
            $pdf->Ln(50);
            $pdf->Cell(45,4,'FISCAL DE CAJA:',0,0,'J');
            $pdf->Ln(10);
            $pdf->Cell(45,4,'________________________________',0,0,'J');
            $pdf->Ln(6);
            $pdf->Cell(45,4,'Firma',0,0,'J');
        }
        else
        {
        $pdf->Cell(60,10,'Por favor recuerde ejecutar VBCONVERT',0,0,'C');
        }        

        return new Response($pdf->Output(), 200, array(
            'Content-Type' => 'application/pdf')
        );
    }

}   