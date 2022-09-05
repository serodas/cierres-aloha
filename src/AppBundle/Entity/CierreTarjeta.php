<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cierre
 *
 * @ORM\Table(name="dbInventario.dbo.cierres_tarjetas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CierreTarjetaRepository")
 */
class CierreTarjeta
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
     * @ORM\ManyToOne(targetEntity="Cierre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cierre_id", referencedColumnName="id")
     * })
     */
    private $cierre;

    /**
     * @var int
     *
     * @ORM\Column(name="formapago_id", type="integer")
     */
    private $formaPago;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="decimal" ,precision=18, scale=5)
     */
    private $total;

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
     * @var string
     *
     * @ORM\Column(name="userauditoria", type="string", length=255)
     */
    private $userauditoria;

    
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
     * Set cierre
     *
     * @param \AppBundle\Entity\Cierre $cierre
     *
     * @return Cierre
     */
    public function setCierre(\AppBundle\Entity\Cierre $cierre = null)
    {
        $this->cierre = $cierre;

        return $this;
    }

    /**
     * Get cierre
     *
     * @return \AppBundle\Entity\Cierre
     */
    public function getCierre()
    {
        return $this->cierre;
    }

    public function getFormaPago()
    {
        return $this->formaPago;
    }

    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;

        return $this;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
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

}

