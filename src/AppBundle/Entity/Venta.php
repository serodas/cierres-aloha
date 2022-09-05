<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Venta
 *
 * @ORM\Table(name="dbInventario.dbo.tblGndSale")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VentaRepository")
 */
class Venta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSec", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee", referencedColumnName="id")
     * })
     */
    private $empleado;

    /**
     * @var int
     *
     * @ORM\Column(name="[check]", type="integer")
     */
    private $check;

    /**
     * @var int
     *
     * @ORM\Column(name="period", type="integer")
     */
    private $period;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

     /**
     * @ORM\ManyToOne(targetEntity="TblFPagos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeid", referencedColumnName="ID")
     * })
     */
    private $typeid;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="openhour", type="integer")
     */
    private $openhour;

    /**
     * @var int
     *
     * @ORM\Column(name="openmin", type="integer")
     */
    private $openmin;

    /**
     * @var int
     *
     * @ORM\Column(name="orderhour", type="integer")
     */
    private $orderhour;

    /**
     * @var int
     *
     * @ORM\Column(name="ordermin", type="integer")
     */
    private $ordermin;

    /**
     * @var int
     *
     * @ORM\Column(name="closehour", type="integer")
     */
    private $closehour;

    /**
     * @var int
     *
     * @ORM\Column(name="closemin", type="integer")
     */
    private $closemin;

    /**
     * @var int
     *
     * @ORM\Column(name="shift", type="integer")
     */
    private $shift;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;

    /**
     * @var int
     *
     * @ORM\Column(name="revenue", type="integer")
     */
    private $revenue;

    /**
     * @var int
     *
     * @ORM\Column(name="tipemp", type="integer")
     */
    private $tipemp;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=5)
     */
    private $unit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="datetime")
     */
    private $dob;

    /**
     * @var int
     *
     * @ORM\Column(name="checkctr", type="integer")
     */
    private $checkctr;

    /**
     * @var int
     *
     * @ORM\Column(name="termid", type="integer")
     */
    private $termid;

    /**
     * @var int
     *
     * @ORM\Column(name="typeid2", type="integer")
     */
    private $typeid2;

    /**
     * @var int
     *
     * @ORM\Column(name="occasion", type="integer")
     */
    private $ocassion;

    /**
     * @var int
     *
     * @ORM\Column(name="revid2", type="integer")
     */
    private $revid2;
  

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
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
     * Get the value of check
     *
     * @return  int
     */ 
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * Set the value of check
     *
     * @param  int  $check
     *
     * @return  self
     */ 
    public function setCheck(int $check)
    {
        $this->check = $check;

        return $this;
    }

    /**
     * Get the value of period
     *
     * @return  int
     */ 
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set the value of period
     *
     * @param  int  $period
     *
     * @return  self
     */ 
    public function setPeriod(int $period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return  int
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  int  $type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Typeid
     *
     * @return \AppBundle\Entity\TblFPagos
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set Typeid
     *
     * @param \AppBundle\Entity\TblFPagos $Typeid
     *
     * @return Venta
     */
    public function setTypeid(\AppBundle\Entity\TblFPagos $typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get the value of amount
     *
     * @return  int
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @param  int  $amount
     *
     * @return  self
     */ 
    public function setAmount(int $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of openhour
     *
     * @return  int
     */ 
    public function getOpenhour()
    {
        return $this->openhour;
    }

    /**
     * Set the value of openhour
     *
     * @param  int  $openhour
     *
     * @return  self
     */ 
    public function setOpenhour(int $openhour)
    {
        $this->openhour = $openhour;

        return $this;
    }

    /**
     * Get the value of openmin
     *
     * @return  int
     */ 
    public function getOpenmin()
    {
        return $this->openmin;
    }

    /**
     * Set the value of openmin
     *
     * @param  int  $openmin
     *
     * @return  self
     */ 
    public function setOpenmin(int $openmin)
    {
        $this->openmin = $openmin;

        return $this;
    }

    /**
     * Get the value of orderhour
     *
     * @return  int
     */ 
    public function getOrderhour()
    {
        return $this->orderhour;
    }

    /**
     * Set the value of orderhour
     *
     * @param  int  $orderhour
     *
     * @return  self
     */ 
    public function setOrderhour(int $orderhour)
    {
        $this->orderhour = $orderhour;

        return $this;
    }

    /**
     * Get the value of ordermin
     *
     * @return  int
     */ 
    public function getOrdermin()
    {
        return $this->ordermin;
    }

    /**
     * Set the value of ordermin
     *
     * @param  int  $ordermin
     *
     * @return  self
     */ 
    public function setOrdermin(int $ordermin)
    {
        $this->ordermin = $ordermin;

        return $this;
    }

    /**
     * Get the value of closehour
     *
     * @return  int
     */ 
    public function getClosehour()
    {
        return $this->closehour;
    }

    /**
     * Set the value of closehour
     *
     * @param  int  $closehour
     *
     * @return  self
     */ 
    public function setClosehour(int $closehour)
    {
        $this->closehour = $closehour;

        return $this;
    }

    /**
     * Get the value of closemin
     *
     * @return  int
     */ 
    public function getClosemin()
    {
        return $this->closemin;
    }

    /**
     * Set the value of closemin
     *
     * @param  int  $closemin
     *
     * @return  self
     */ 
    public function setClosemin(int $closemin)
    {
        $this->closemin = $closemin;

        return $this;
    }

    /**
     * Get the value of shift
     *
     * @return  int
     */ 
    public function getShift()
    {
        return $this->shift;
    }

    /**
     * Set the value of shift
     *
     * @param  int  $shift
     *
     * @return  self
     */ 
    public function setShift(int $shift)
    {
        $this->shift = $shift;

        return $this;
    }

    /**
     * Get the value of count
     *
     * @return  int
     */ 
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set the value of count
     *
     * @param  int  $count
     *
     * @return  self
     */ 
    public function setCount(int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get the value of revenue
     *
     * @return  int
     */ 
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Set the value of revenue
     *
     * @param  int  $revenue
     *
     * @return  self
     */ 
    public function setRevenue(int $revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Get the value of tipemp
     *
     * @return  int
     */ 
    public function getTipemp()
    {
        return $this->tipemp;
    }

    /**
     * Set the value of tipemp
     *
     * @param  int  $tipemp
     *
     * @return  self
     */ 
    public function setTipemp(int $tipemp)
    {
        $this->tipemp = $tipemp;

        return $this;
    }

    /**
     * Get the value of unit
     *
     * @return  string
     */ 
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set the value of unit
     *
     * @param  string  $unit
     *
     * @return  self
     */ 
    public function setUnit(string $unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get the value of dob
     *
     * @return  \DateTime
     */ 
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @param  \DateTime  $dob
     *
     * @return  self
     */ 
    public function setDob(\DateTime $dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of checkctr
     *
     * @return  int
     */ 
    public function getCheckctr()
    {
        return $this->checkctr;
    }

    /**
     * Set the value of checkctr
     *
     * @param  int  $checkctr
     *
     * @return  self
     */ 
    public function setCheckctr(int $checkctr)
    {
        $this->checkctr = $checkctr;

        return $this;
    }

    /**
     * Get the value of termid
     *
     * @return  int
     */ 
    public function getTermid()
    {
        return $this->termid;
    }

    /**
     * Set the value of termid
     *
     * @param  int  $termid
     *
     * @return  self
     */ 
    public function setTermid(int $termid)
    {
        $this->termid = $termid;

        return $this;
    }

    /**
     * Get the value of typeid2
     *
     * @return  int
     */ 
    public function getTypeid2()
    {
        return $this->typeid2;
    }

    /**
     * Set the value of typeid2
     *
     * @param  int  $typeid2
     *
     * @return  self
     */ 
    public function setTypeid2(int $typeid2)
    {
        $this->typeid2 = $typeid2;

        return $this;
    }

    /**
     * Get the value of ocassion
     *
     * @return  int
     */ 
    public function getOcassion()
    {
        return $this->ocassion;
    }

    /**
     * Set the value of ocassion
     *
     * @param  int  $ocassion
     *
     * @return  self
     */ 
    public function setOcassion(int $ocassion)
    {
        $this->ocassion = $ocassion;

        return $this;
    }

    /**
     * Get the value of revid2
     *
     * @return  int
     */ 
    public function getRevid2()
    {
        return $this->revid2;
    }

    /**
     * Set the value of revid2
     *
     * @param  int  $revid2
     *
     * @return  self
     */ 
    public function setRevid2(int $revid2)
    {
        $this->revid2 = $revid2;

        return $this;
    }
}

