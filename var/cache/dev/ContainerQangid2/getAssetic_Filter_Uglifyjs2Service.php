<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.filter.uglifyjs2' shared service.

$this->services['assetic.filter.uglifyjs2'] = $instance = new \Assetic\Filter\UglifyJs2Filter(($this->targetDirs[3].'/app/Resources/node_modules/.bin/uglifyjs'), '/usr/bin/nodejs');

$instance->setTimeout(NULL);
$instance->setNodePaths([]);
$instance->setCompress(false);
$instance->setBeautify(false);
$instance->setMangle(false);
$instance->setScrewIe8(false);
$instance->setComments(false);
$instance->setWrap(false);
$instance->setDefines([]);

return $instance;
