<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Cierre;

/**
 * @Route("/venta")
 */
class VentaController extends Controller
{
    private $session;

    public function __construct(){
        $this->session = New Session();
    }

    public function getManager(){
        return $this->getDoctrine()->getManager();
    }

    public function getRepository(){
        return $this->getManager()->getRepository("AppBundle:Venta");
    }

    /**
     * @Route("/productosvendidos", name="productosvendidos")
     */
    public function ReporteProductosVendidos()
    {   
        return $this->render("AppBundle:Venta:reportedetalleproductosvendidos.html.twig",array(
        ));
    }

    /**
     * @Route("/consultacuentas", name="consultacuentas")
     */
    public function consultarAction(){  
        return $this->render("AppBundle:Venta:cuentas.html.twig",array(
        ));
    }

    /**
     * @Route("/modificarcuentas", name="modificarcuentas")
     */
    public function modificarAction(){  
        return $this->render("AppBundle:Venta:modificarcuentas.html.twig",array(
        ));
    }

    /**
     * @Route("/reembolsos", name="reembolsos")
     */
    public function reembolsosAction(){  
        return $this->render("AppBundle:Venta:reembolsos.html.twig",array(
        ));
    }

    /**
     * @Route("/consultadevouchers", name="consultadevouchers")
     */
    public function consultarVoucherAction(){  
        return $this->render("AppBundle:Venta:consultadevouchers.html.twig",array(
        ));
    }

    /**
     * @Route("/interfaceinventario", name="interfaceinventario")
     */
    public function generarInterfaceInventarioAction(){  
        return $this->render("AppBundle:Venta:interfaceinventario.html.twig",array(
        ));
    }

    /**
     * @Route("/interfaceproductos", name="interfaceproductos")
     */
    public function generarInterfaceProductosAction(){  
        return $this->render("AppBundle:Venta:interfaceproductos.html.twig",array(
        ));
    }


}   