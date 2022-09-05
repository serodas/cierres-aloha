<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{

    public function indexAction()
    {
        return $this->render("AppBundle:Login:index.html.twig");
    }

    
    
    public function loginAction()
    {   
        return $this->render('AppBundle:Login:login.html.twig');
    }

}
