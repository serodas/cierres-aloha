<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.mysql_connection' shared service.

$a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$a->addEventListener([0 => 'loadClassMetadata'], ${($_ = isset($this->services['doctrine.orm.mysql_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.mysql_listeners.attach_entity_listeners'] : ($this->services['doctrine.orm.mysql_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener())) && false ?: '_'});

return $this->services['doctrine.dbal.mysql_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : ($this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))) && false ?: '_'}->createConnection(['driver' => 'pdo_mysql', 'host' => 'phptest.comfamiliar.com', 'port' => NULL, 'dbname' => 'cierre_aloha', 'user' => 'cierredev', 'password' => 'KcppE3f8UJhLf75a', 'charset' => 'UTF8', 'driverOptions' => [], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), $a, []);
