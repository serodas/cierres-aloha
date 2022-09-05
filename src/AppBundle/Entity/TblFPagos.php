<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\Type;

/**
 * TblFPagos
 *
 * @ORM\Table(name="DBINVENTARIO.dbo.TblFPagos")
 * @ORM\Entity
 * @ExclusionPolicy("none")
 */
class TblFPagos {

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * 
     * @JMS\Groups({"API","Default"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="IdAlmacen", type="string", nullable=false)
     */
    private $idAlmacen;
    
    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Cash", type="string", nullable=true)
     */
    private $cash;

    /**
     * @var string
     *
     * @ORM\Column(name="FUltMod", type="string", nullable=true)
     */
    private $fultmod;

    /**
     * @var string
     *
     * @ORM\Column(name="Usuario", type="string", nullable=true)
     */
    private $usuario;

    public function getId() {
        return $this->id;
    }

    public function getIdAlmacen() {
        return $this->idAlmacen;
    }

    public function getNAME() {
        return $this->name;
    }

    public function getCash() {
        return $this->cash;
    }

    public function getFUltMod() {
        return $this->fultmod;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setIdAlmacen($IdAlmacen) {
        $this->idAlmacen = $IdAlmacen;
        return $this;
    }

    public function setNAME($NAME) {
        $this->name = $NAME;
        return $this;
    }

    public function setCash($Cash) {
        $this->cash = $Cash;
        return $this;
    }

    public function setFUltMod($FUltMod) {
        $this->fultmod = $FUltMod;
        return $this;
    }

    public function setUsuario($Usuario) {
        $this->usuario = $Usuario;
        return $this;
    }    
}
