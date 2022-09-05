<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terminal
 *
 * @ORM\Table(name="dbInventario.dbo.tblTrm")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TerminalRepository")
 */
class Terminal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="IdSec", type="integer")
     */
    private $idSec;

    /**
     * @var string
     *
     * @ORM\Column(name="IdAlmacen", type="string", length=5)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="[order]", type="string", length=1, nullable=true)
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="EdcinFO", type="string", length=20, nullable=true)
     */
    private $edcinFO;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FecCreacion", type="datetime")
     */
    private $fecCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FUltMod", type="datetime")
     */
    private $fUltMod;

    /**
     * @var string
     *
     * @ORM\Column(name="Usuario", type="string", length=10, nullable=true)
     */
    private $usuario;

    /**
     * @var int
     *
     * @ORM\Column(name="Printer", type="integer", nullable=true)
     */
    private $printer;

    /**
     * @var int
     *
     * @ORM\Column(name="revenue", type="integer", nullable=true)
     */
    private $revenue;

    public function __toString(){
        return $this->name;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idSec
     *
     * @param integer $idSec
     *
     * @return Terminal
     */
    public function setIdSec($idSec)
    {
        $this->idSec = $idSec;

        return $this;
    }

    /**
     * Get idSec
     *
     * @return int
     */
    public function getIdSec()
    {
        return $this->idSec;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     *
     * @return Terminal
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Terminal
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set orderr
     *
     * @param string $orderr
     *
     * @return Terminal
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get orderr
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set edcinFO
     *
     * @param string $edcinFO
     *
     * @return Terminal
     */
    public function setEdcinFO($edcinFO)
    {
        $this->edcinFO = $edcinFO;

        return $this;
    }

    /**
     * Get edcinFO
     *
     * @return string
     */
    public function getEdcinFO()
    {
        return $this->edcinFO;
    }

    /**
     * Set fecCreacion
     *
     * @param \DateTime $fecCreacion
     *
     * @return Terminal
     */
    public function setFecCreacion($fecCreacion)
    {
        $this->fecCreacion = $fecCreacion;

        return $this;
    }

    /**
     * Get fecCreacion
     *
     * @return \DateTime
     */
    public function getFecCreacion()
    {
        return $this->fecCreacion;
    }

    /**
     * Set fUltMod
     *
     * @param \DateTime $fUltMod
     *
     * @return Terminal
     */
    public function setFUltMod($fUltMod)
    {
        $this->fUltMod = $fUltMod;

        return $this;
    }

    /**
     * Get fUltMod
     *
     * @return \DateTime
     */
    public function getFUltMod()
    {
        return $this->fUltMod;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Terminal
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set printer
     *
     * @param integer $printer
     *
     * @return Terminal
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;

        return $this;
    }

    /**
     * Get printer
     *
     * @return int
     */
    public function getPrinter()
    {
        return $this->printer;
    }

    /**
     * Set revenue
     *
     * @param integer $revenue
     *
     * @return Terminal
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Get revenue
     *
     * @return int
     */
    public function getRevenue()
    {
        return $this->revenue;
    }
}

