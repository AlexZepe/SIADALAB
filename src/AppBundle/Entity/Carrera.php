<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 */
class Carrera
{
    /**
     * @var integer
     */
    private $idCarrera;

    /**
     * @var string
     */
    private $nomCarrera;

    /**
     * @var string
     */
    private $codigoCarrera;

    /**
     * @var \AppBundle\Entity\Escuela
     */
    private $idEscuela;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idMateria;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMateria = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idCarrera
     *
     * @return integer 
     */
    public function getIdCarrera()
    {
        return $this->idCarrera;
    }

    /**
     * Set nomCarrera
     *
     * @param string $nomCarrera
     * @return Carrera
     */
    public function setNomCarrera($nomCarrera)
    {
        $this->nomCarrera = $nomCarrera;

        return $this;
    }

    /**
     * Get nomCarrera
     *
     * @return string 
     */
    public function getNomCarrera()
    {
        return $this->nomCarrera;
    }

    /**
     * Set codigoCarrera
     *
     * @param string $codigoCarrera
     * @return Carrera
     */
    public function setCodigoCarrera($codigoCarrera)
    {
        $this->codigoCarrera = $codigoCarrera;

        return $this;
    }

    /**
     * Get codigoCarrera
     *
     * @return string 
     */
    public function getCodigoCarrera()
    {
        return $this->codigoCarrera;
    }

    /**
     * Set idEscuela
     *
     * @param \AppBundle\Entity\Escuela $idEscuela
     * @return Carrera
     */
    public function setIdEscuela(\AppBundle\Entity\Escuela $idEscuela = null)
    {
        $this->idEscuela = $idEscuela;

        return $this;
    }

    /**
     * Get idEscuela
     *
     * @return \AppBundle\Entity\Escuela 
     */
    public function getIdEscuela()
    {
        return $this->idEscuela;
    }

    /**
     * Add idMateria
     *
     * @param \AppBundle\Entity\Materia $idMateria
     * @return Carrera
     */
    public function addIdMaterium(\AppBundle\Entity\Materia $idMateria)
    {
        $this->idMateria[] = $idMateria;

        return $this;
    }

    /**
     * Remove idMateria
     *
     * @param \AppBundle\Entity\Materia $idMateria
     */
    public function removeIdMaterium(\AppBundle\Entity\Materia $idMateria)
    {
        $this->idMateria->removeElement($idMateria);
    }

    /**
     * Get idMateria
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdMateria()
    {
        return $this->idMateria;
    }
}
