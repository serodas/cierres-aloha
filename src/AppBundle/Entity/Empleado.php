<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="dbInventario.dbo.tblEmpleados")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmpleadoRepository")
 */
class Empleado
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
     * @ORM\Column(name="IdAlmacen", type="string", length=5, nullable=true)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=50, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=50, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="NickName", type="string", length=50, nullable=true)
     */
    private $nickName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FultMod", type="datetime", nullable=true)
     */
    private $fultMod;

    /**
     * @var string
     *
     * @ORM\Column(name="Usuario", type="string", length=10, nullable=true)
     */
    private $usuario;


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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     *
     * @return Empleado
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Empleado
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Empleado
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     *
     * @return Empleado
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Set fultMod
     *
     * @param \DateTime $fultMod
     *
     * @return Empleado
     */
    public function setFultMod($fultMod)
    {
        $this->fultMod = $fultMod;

        return $this;
    }

    /**
     * Get fultMod
     *
     * @return \DateTime
     */
    public function getFultMod()
    {
        return $this->fultMod;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Empleado
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
}

