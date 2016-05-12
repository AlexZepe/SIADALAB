<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 */
class Rol
{
    /**
     * @var integer
     */
    private $idRol;

    /**
     * @var string
     */
    private $nomRol;

    /**
     * @var string
     */
    private $descripcionRol;


    /**
     * Get idRol
     *
     * @return integer 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * Set nomRol
     *
     * @param string $nomRol
     * @return Rol
     */
    public function setNomRol($nomRol)
    {
        $this->nomRol = $nomRol;

        return $this;
    }

    /**
     * Get nomRol
     *
     * @return string 
     */
    public function getNomRol()
    {
        return $this->nomRol;
    }

    /**
     * Set descripcionRol
     *
     * @param string $descripcionRol
     * @return Rol
     */
    public function setDescripcionRol($descripcionRol)
    {
        $this->descripcionRol = $descripcionRol;

        return $this;
    }

    /**
     * Get descripcionRol
     *
     * @return string 
     */
    public function getDescripcionRol()
    {
        return $this->descripcionRol;
    }
}
