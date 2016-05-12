<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var string
     */
    private $nomUsuario;

    /**
     * @var string
     */
    private $usuario;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var \AppBundle\Entity\Rol
     */
    private $idRol;


    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set nomUsuario
     *
     * @param string $nomUsuario
     * @return Usuario
     */
    public function setNomUsuario($nomUsuario)
    {
        $this->nomUsuario = $nomUsuario;

        return $this;
    }

    /**
     * Get nomUsuario
     *
     * @return string 
     */
    public function getNomUsuario()
    {
        return $this->nomUsuario;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
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
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set idRol
     *
     * @param \AppBundle\Entity\Rol $idRol
     * @return Usuario
     */
    public function setIdRol(\AppBundle\Entity\Rol $idRol = null)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return \AppBundle\Entity\Rol 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }
}
