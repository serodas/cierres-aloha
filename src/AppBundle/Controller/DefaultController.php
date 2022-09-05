<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $roles = $this->get('security.token_storage')->getToken()->getRoles();
        foreach($roles as $role)
        {
            if($role->getRole() == 'ROLE_CAJEROALOHA'){
                return $this->redirectToRoute("cierreparcialdecaja");
            }
            if($role->getRole() == 'ROLE_FISCALALOHA'){
                return $this->redirectToRoute("consultadevouchers");
            }
            if($role->getRole() == 'ROLE_ANALISTAINVENTARIO'){
                return $this->redirectToRoute("productosvendidos");
            }
            if($role->getRole() == 'ROLE_AUDITOR'){
                return $this->redirectToRoute("consultacuentas");
            }
            if($role->getRole() == 'ROLE_TESOREROALOHA'){
                return $this->redirectToRoute("autorizardenominaciones");
            }
            if($role->getRole() == 'ROLE_ADMIN'){
                return $this->render("AppBundle:Principal:body.html.twig");
            }
        }
    }
}
