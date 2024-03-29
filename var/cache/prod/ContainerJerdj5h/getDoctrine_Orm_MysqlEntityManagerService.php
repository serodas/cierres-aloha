<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.mysql_entity_manager' shared service.

$a = new \Doctrine\ORM\Configuration();

$b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, [0 => ($this->targetDirs[3].'/src/AppBundle/Entity')]), 'AppBundle\\Entity');

$a->setEntityNamespaces(['AppBundle' => 'AppBundle\\Entity']);
$a->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.mysql_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.mysql_metadata_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_MysqlMetadataCacheService.php')) && false ?: '_'});
$a->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.mysql_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.mysql_query_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_MysqlQueryCacheService.php')) && false ?: '_'});
$a->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.mysql_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.mysql_result_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_MysqlResultCacheService.php')) && false ?: '_'});
$a->setMetadataDriverImpl($b);
$a->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$a->setProxyNamespace('Proxies');
$a->setAutoGenerateProxyClasses(true);
$a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$a->setNamingStrategy(${($_ = isset($this->services['doctrine.orm.naming_strategy.default']) ? $this->services['doctrine.orm.naming_strategy.default'] : ($this->services['doctrine.orm.naming_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultNamingStrategy())) && false ?: '_'});
$a->setQuoteStrategy(${($_ = isset($this->services['doctrine.orm.quote_strategy.default']) ? $this->services['doctrine.orm.quote_strategy.default'] : ($this->services['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy())) && false ?: '_'});
$a->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.mysql_entity_listener_resolver']) ? $this->services['doctrine.orm.mysql_entity_listener_resolver'] : ($this->services['doctrine.orm.mysql_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this))) && false ?: '_'});
$a->setRepositoryFactory(${($_ = isset($this->services['doctrine.orm.container_repository_factory']) ? $this->services['doctrine.orm.container_repository_factory'] : $this->load('getDoctrine_Orm_ContainerRepositoryFactoryService.php')) && false ?: '_'});

$this->services['doctrine.orm.mysql_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.mysql_connection']) ? $this->services['doctrine.dbal.mysql_connection'] : $this->load('getDoctrine_Dbal_MysqlConnectionService.php')) && false ?: '_'}, $a);

${($_ = isset($this->services['doctrine.orm.mysql_manager_configurator']) ? $this->services['doctrine.orm.mysql_manager_configurator'] : ($this->services['doctrine.orm.mysql_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))) && false ?: '_'}->configure($instance);

return $instance;
