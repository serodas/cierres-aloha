<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.encoder_factory' shared service.

return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['Comfamiliar\\SeguridadBundle\\Sec\\SecUser' => ${($_ = isset($this->services['sec.security.encoder']) ? $this->services['sec.security.encoder'] : ($this->services['sec.security.encoder'] = new \Comfamiliar\SeguridadBundle\Sec\SecEncoder())) && false ?: '_'}]);
