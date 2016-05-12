<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aula
 */
class Aula
{
    /**
     * @var integer
     */
    private $idAula;

    /**
     * @var string
     */
    private $nomAula;

    /**
     * @var integer
     */
    private $capacidad;

    /**
     * @var string
     */
    private $sonido;

    /**
     * @var \AppBundle\Entity\Actividad
     */
    private $idActividad;

    /**
     * @var \AppBundle\Entity\EstadoAula
     */
    private $idEstadoAula;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idPizarra;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPizarra = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idAula
     *
     * @return integer 
     */
    public function getIdAula()
    {
        return $this->idAula;
    }

    /**
     * Set nomAula
     *
     * @param string $nomAula
     * @return Aula
     */
    public function setNomAula($nomAula)
    {
        $this->nomAula = $nomAula;

        return $this;
    }

    /**
     * Get nomAula
     *
     * @return string 
     */
    public function getNomAula()
    {
        return $this->nomAula;
    }

    /**
     * Set capacidad
     *
     * @param integer $capacidad
     * @return Aula
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return integer 
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set sonido
     *
     * @param string $sonido
     * @return Aula
     */
    public function setSonido($sonido)
    {
        $this->sonido = $sonido;

        return $this;
    }

    /**
     * Get sonido
     *
     * @return string 
     */
    public function getSonido()
    {
        return $this->sonido;
    }

    /**
     * Set idActividad
     *
     * @param \AppBundle\Entity\Actividad $idActividad
     * @return Aula
     */
    public function setIdActividad(\AppBundle\Entity\Actividad $idActividad = null)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return \AppBundle\Entity\Actividad 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set idEstadoAula
     *
     * @param \AppBundle\Entity\EstadoAula $idEstadoAula
     * @return Aula
     */
    public function setIdEstadoAula(\AppBundle\Entity\EstadoAula $idEstadoAula = null)
    {
        $this->idEstadoAula = $idEstadoAula;

        return $this;
    }

    /**
     * Get idEstadoAula
     *
     * @return \AppBundle\Entity\EstadoAula 
     */
    public function getIdEstadoAula()
    {
        return $this->idEstadoAula;
    }

    /**
     * Add idPizarra
     *
     * @param \AppBundle\Entity\TipoPizarra $idPizarra
     * @return Aula
     */
    public function addIdPizarra(\AppBundle\Entity\TipoPizarra $idPizarra)
    {
        $this->idPizarra[] = $idPizarra;

        return $this;
    }

    /**
     * Remove idPizarra
     *
     * @param \AppBundle\Entity\TipoPizarra $idPizarra
     */
    public function removeIdPizarra(\AppBundle\Entity\TipoPizarra $idPizarra)
    {
        $this->idPizarra->removeElement($idPizarra);
    }

    /**
     * Get idPizarra
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPizarra()
    {
        return $this->idPizarra;
    }
}
