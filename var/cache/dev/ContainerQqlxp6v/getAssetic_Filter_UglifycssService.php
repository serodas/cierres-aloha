<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.filter.uglifycss' shared service.

$this->services['assetic.filter.uglifycss'] = $instance = new \Assetic\Filter\UglifyCssFilter(($this->targetDirs[3].'/app/Resources/node_modules/.bin/uglifycss'), '/usr/bin/nodejs');

$instance->setTimeout(NULL);
$instance->setNodePaths(array());
$instance->setExpandVars(false);
$instance->setUglyComments(false);
$instance->setCuteComments(false);

return $instance;
