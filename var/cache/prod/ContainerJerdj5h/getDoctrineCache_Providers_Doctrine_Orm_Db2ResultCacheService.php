<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_cache.providers.doctrine.orm.db2_result_cache' shared service.

$this->services['doctrine_cache.providers.doctrine.orm.db2_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_db2_edd209969fb95b72bfa62fe9d0dc9548da117fc2de93e4e39c118f8a9e8e0365');

return $instance;
