<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/cajero/cierreparcialdecaja'), array(0 => 'ROLE_CAJEROALOHA'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/cajero/consultadecajas'), array(0 => 'ROLE_CAJEROALOHA'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/cajero/autorizardenominaciones'), array(0 => 'ROLE_FISCALALOHA'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/cajero/formreporte'), array(0 => 'ROLE_FISCALALOHA'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/cajero/formreportenoefectivas'), array(0 => 'ROLE_FISCALALOHA'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/_wdt'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), array(0 => 'ROLE_USUARIO'), NULL);

return $instance;
