<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/cajero'), [0 => 'ROLE_CAJEROALOHA', 1 => 'ROLE_FISCALALOHA', 2 => 'ROLE_AUDITOR', 3 => 'ROLE_TESOREROALOHA'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/venta'), [0 => 'ROLE_FISCALALOHA', 1 => 'ROLE_ANALISTAINVENTARIO', 2 => 'ROLE_AUDITOR', 3 => 'ROLE_TESOREROALOHA'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/reporte'), [0 => 'ROLE_FISCALALOHA', 1 => 'ROLE_ANALISTAINVENTARIO', 2 => 'ROLE_AUDITOR', 3 => 'ROLE_TESOREROALOHA'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/_wdt'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), [0 => 'ROLE_USUARIO'], NULL);

return $instance;
