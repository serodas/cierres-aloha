<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.db2_entity_manager' shared service.

$a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, array(0 => ($this->targetDirs[3].'/src/AppBundle/Entity'))), 'AppBundle\\Entity');

$b = new \Doctrine\ORM\Configuration();
$b->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity'));
$b->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.db2_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.db2_metadata_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_Db2MetadataCacheService.php')) && false ?: '_'});
$b->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.db2_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.db2_query_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_Db2QueryCacheService.php')) && false ?: '_'});
$b->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.db2_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.db2_result_cache'] : $this->load('getDoctrineCache_Providers_Doctrine_Orm_Db2ResultCacheService.php')) && false ?: '_'});
$b->setMetadataDriverImpl($a);
$b->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$b->setProxyNamespace('Proxies');
$b->setAutoGenerateProxyClasses(true);
$b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$b->setNamingStrategy(${($_ = isset($this->services['doctrine.orm.naming_strategy.default']) ? $this->services['doctrine.orm.naming_strategy.default'] : $this->services['doctrine.orm.naming_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultNamingStrategy()) && false ?: '_'});
$b->setQuoteStrategy(${($_ = isset($this->services['doctrine.orm.quote_strategy.default']) ? $this->services['doctrine.orm.quote_strategy.default'] : $this->services['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy()) && false ?: '_'});
$b->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.db2_entity_listener_resolver']) ? $this->services['doctrine.orm.db2_entity_listener_resolver'] : $this->services['doctrine.orm.db2_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this)) && false ?: '_'});
$b->setRepositoryFactory(${($_ = isset($this->services['doctrine.orm.container_repository_factory']) ? $this->services['doctrine.orm.container_repository_factory'] : $this->load('getDoctrine_Orm_ContainerRepositoryFactoryService.php')) && false ?: '_'});

$this->services['doctrine.orm.db2_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.db2_connection']) ? $this->services['doctrine.dbal.db2_connection'] : $this->load('getDoctrine_Dbal_Db2ConnectionService.php')) && false ?: '_'}, $b);

${($_ = isset($this->services['doctrine.orm.db2_manager_configurator']) ? $this->services['doctrine.orm.db2_manager_configurator'] : $this->services['doctrine.orm.db2_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

return $instance;
