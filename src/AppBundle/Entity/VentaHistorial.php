<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VentaHistorial
 *
 * @ORM\Table(name="dbInventario.dbo.ventashistorial")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VentaHistorialRepository")
 */
class VentaHistorial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idSec", type="integer")
     */
    private $idSec;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cuenta", type="string")
     */
    private $cuenta;

    /**
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumn(name="empleado_id", referencedColumnName="id")
     */
    private $empleado;

    /**
     * @ORM\ManyToOne(targetEntity="TblFPagos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fpagonew_id", referencedColumnName="ID")
     * })
     */
    private $fpagonew;

     /**
     * @ORM\ManyToOne(targetEntity="TblFPagos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fpagoold_id", referencedColumnName="ID")
     * })
     */
    private $fpagoold;

    /**
     * @var int
     *
     * @ORM\Column(name="valornew", type="integer")
     */
    private $valornew;

    /**
     * @var int
     *
     * @ORM\Column(name="valorold", type="integer")
     */
    private $valorold;

    /**
     * @var int
     *
     * @ORM\Column(name="valortotalnew", type="integer")
     */
    private $valortotalnew;

    /**
     * @var int
     *
     * @ORM\Column(name="valortotalreal", type="integer")
     */
    private $valortotalreal;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string")
     */
    private $observacion;

     /**
     * @var datetime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

     /**
     * @var string
     *
     * @ORM\Column(name="login", type="string")
     */
    private $login;



    /**
     * Get the value of id
     *
     * @return  integer
     */ 
    public function getId()
    {
        return $this->id;
    }

    

    /**
     * Get the value of idSec
     *
     * @return  int
     */ 
    public function getIdSec()
    {
        return $this->idSec;
    }

    /**
     * Set the value of idSec
     *
     * @param  int  $idSec
     *
     * @return  self
     */ 
    public function setIdSec(int $idSec)
    {
        $this->idSec = $idSec;

        return $this;
    }

    /**
     * Get the value of fecha
     *
     * @return  string
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @param  string  $fecha
     *
     * @return  self
     */ 
    public function setFecha(string $fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of cuenta
     *
     * @return  string
     */ 
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set the value of cuenta
     *
     * @param  string  $cuenta
     *
     * @return  self
     */ 
    public function setCuenta(string $cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get the value of empleado
     */ 
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set the value of empleado
     *
     * @return  self
     */ 
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;

        return $this;
    }

    /**
     * Get })
     */ 
    public function getFpagonew()
    {
        return $this->fpagonew;
    }

    /**
     * Set })
     *
     * @return  self
     */ 
    public function setFpagonew($fpagonew)
    {
        $this->fpagonew = $fpagonew;

        return $this;
    }

    /**
     * Get })
     */ 
    public function getFpagoold()
    {
        return $this->fpagoold;
    }

    /**
     * Set })
     *
     * @return  self
     */ 
    public function setFpagoold($fpagoold)
    {
        $this->fpagoold = $fpagoold;

        return $this;
    }

    /**
     * Get the value of valornew
     *
     * @return  int
     */ 
    public function getValornew()
    {
        return $this->valornew;
    }

    /**
     * Set the value of valornew
     *
     * @param  int  $valornew
     *
     * @return  self
     */ 
    public function setValornew(int $valornew)
    {
        $this->valornew = $valornew;

        return $this;
    }

    /**
     * Get the value of valorold
     *
     * @return  int
     */ 
    public function getValorold()
    {
        return $this->valorold;
    }

    /**
     * Set the value of valorold
     *
     * @param  int  $valorold
     *
     * @return  self
     */ 
    public function setValorold(int $valorold)
    {
        $this->valorold = $valorold;

        return $this;
    }

    /**
     * Get the value of valortotalnew
     *
     * @return  int
     */ 
    public function getValortotalnew()
    {
        return $this->valortotalnew;
    }

    /**
     * Set the value of valortotalnew
     *
     * @param  int  $valortotalnew
     *
     * @return  self
     */ 
    public function setValortotalnew(int $valortotalnew)
    {
        $this->valortotalnew = $valortotalnew;

        return $this;
    }

    /**
     * Get the value of valortotalreal
     *
     * @return  int
     */ 
    public function getValortotalreal()
    {
        return $this->valortotalreal;
    }

    /**
     * Set the value of valortotalreal
     *
     * @param  int  $valortotalreal
     *
     * @return  self
     */ 
    public function setValortotalreal(int $valortotalreal)
    {
        $this->valortotalreal = $valortotalreal;

        return $this;
    }

    /**
     * Get the value of observacion
     *
     * @return  string
     */ 
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set the value of observacion
     *
     * @param  string  $observacion
     *
     * @return  self
     */ 
    public function setObservacion(string $observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get the value of createdAt
     *
     * @return  datetime
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param  datetime  $createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of login
     *
     * @return  string
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @param  string  $login
     *
     * @return  self
     */ 
    public function setLogin(string $login)
    {
        $this->login = $login;

        return $this;
    }
}    