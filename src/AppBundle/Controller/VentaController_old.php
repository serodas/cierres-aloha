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
        return $this->render("AppBundle:Venta:reporteconsolidadoproductosvendidos.html.twig",array(
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

}   