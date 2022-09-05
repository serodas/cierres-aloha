<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cierre
 *
 * @ORM\Table(name="dbInventario.dbo.cierres")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CierreRepository")
 */
class Cierre
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
     * @var string
     *
     * @ORM\Column(name="fecha", type="string", length=255)
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="Terminal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="terminal_id", referencedColumnName="id")
     * })
     */
    private $terminal;

    /**
     * @var int
     *
     * @ORM\Column(name="digitado", type="integer")
     */
    private $digitado;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="name_user", type="string", length=255)
     */
    private $nameUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumn(name="empleado_id", referencedColumnName="id")
     */
    private $empleado;

    /**
     * @ORM\ManyToOne(targetEntity="Motivo")
     * @ORM\JoinColumn(name="motivo_id", referencedColumnName="id")
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="userauditoria", type="string", length=255)
     */
    private $userauditoria;

    /**
     * @var int
     *
     * @ORM\Column(name="diferencia", type="integer")
     */
    private $diferencia;


       /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=255)
     */
    private $documento;

     /**
     * @ORM\OneToMany(targetEntity="CierreTarjeta", cascade={"all"},mappedBy="cierre",orphanRemoval=true)
     */
    private $cierreTarjeta;


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
     * Set fecha
     *
     * @param string $fecha
     *
     * @return Cierre
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set termina
     *
     * @param \AppBundle\Entity\Terminal $terminal
     *
     * @return Cierre
     */
    public function setTerminal(\AppBundle\Entity\Terminal $terminal=null)
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Get terminal
     *
     * @return \AppBundle\Entity\Terminal
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Set digitado
     *
     * @param integer $digitado
     *
     * @return Cierre
     */
    public function setDigitado($digitado)
    {
        $this->digitado = $digitado;

        return $this;
    }

    /**
     * Get digitado
     *
     * @return int
     */
    public function getDigitado()
    {
        return $this->digitado;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Cierre
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set nameUser
     *
     * @param string $nameUser
     *
     * @return Cierre
     */
    public function setNameUser($nameUser)
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    /**
     * Get nameUser
     *
     * @return string
     */
    public function getNameUser()
    {
        return $this->nameUser;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Cierre
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Cierre
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set empleado
     *
     * @param \AppBundle\Entity\Empleado $empleado
     *
     * @return Cierre
     */
    public function setEmpleado($empleado)
    {
        $this->empleado= $empleado;

        return $this;
    }

    /**
     * Get empleado
     *
     * @return \AppBundle\Entity\Empleado
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set motivo
     *
     * @param \AppBundle\Entity\Motivo $motivo
     *
     * @return Cierre
     */
    public function setMotivo(\AppBundle\Entity\Motivo $motivo=null)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get empleado
     *
     * @return \AppBundle\Entity\Motivo
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set userauditoria
     *
     * @param string $userauditoria
     *
     * @return Cierre
     */
    public function setUserauditoria($userauditoria)
    {
        $this->userauditoria = $userauditoria;

        return $this;
    }

    /**
     * Get userauditoria
     *
     * @return string
     */
    public function getUserauditoria()
    {
        return $this->userauditoria;
    }

    /**
     * Get the value of diferencia
     *
     * @return  int
     */ 
    public function getDiferencia()
    {
        return $this->diferencia;
    }

    /**
     * Set the value of diferencia
     *
     * @param  int  $diferencia
     *
     * @return  self
     */ 
    public function setDiferencia($diferencia)
    {
        $this->diferencia = $diferencia;

        return $this;
    }

    /**
     * Get the value of documento
     *
     * @return  string
     */ 
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set the value of documento
     *
     * @param  string  $documento
     *
     * @return  self
     */ 
    public function setDocumento(string $documento)
    {
        $this->documento = $documento;

        return $this;
    }

    public function getCierreTarjeta()
    {
        return $this->cierreTarjeta;
    }
 
    public function setCierreTarjeta(\AppBundle\Entity\CierreTarjeta $cierreTarjeta = null)
    {
        $this->cierreTarjeta = $cierreTarjeta;

        return $this;
    }
}

