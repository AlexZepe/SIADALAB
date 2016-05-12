<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 */
class Actividad
{
    /**
     * @var integer
     */
    private $idActividad;

    /**
     * @var string
     */
    private $nomActividad;

    /**
     * @var \DateTime
     */
    private $fechaRealizacion;

    /**
     * @var \DateTime
     */
    private $fechaAprobadoRechazado;

    /**
     * @var \AppBundle\Entity\EstadoActividad
     */
    private $idEstadoActividad;

    /**
     * @var \AppBundle\Entity\Materia
     */
    private $idMateria;

    /**
     * @var \AppBundle\Entity\ReservaActividad
     */
    private $idReservaActividad;

    /**
     * @var \AppBundle\Entity\SolicitudReserva
     */
    private $idSolicitudReserva;


    /**
     * Get idActividad
     *
     * @return integer 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set nomActividad
     *
     * @param string $nomActividad
     * @return Actividad
     */
    public function setNomActividad($nomActividad)
    {
        $this->nomActividad = $nomActividad;

        return $this;
    }

    /**
     * Get nomActividad
     *
     * @return string 
     */
    public function getNomActividad()
    {
        return $this->nomActividad;
    }

    /**
     * Set fechaRealizacion
     *
     * @param \DateTime $fechaRealizacion
     * @return Actividad
     */
    public function setFechaRealizacion($fechaRealizacion)
    {
        $this->fechaRealizacion = $fechaRealizacion;

        return $this;
    }

    /**
     * Get fechaRealizacion
     *
     * @return \DateTime 
     */
    public function getFechaRealizacion()
    {
        return $this->fechaRealizacion;
    }

    /**
     * Set fechaAprobadoRechazado
     *
     * @param \DateTime $fechaAprobadoRechazado
     * @return Actividad
     */
    public function setFechaAprobadoRechazado($fechaAprobadoRechazado)
    {
        $this->fechaAprobadoRechazado = $fechaAprobadoRechazado;

        return $this;
    }

    /**
     * Get fechaAprobadoRechazado
     *
     * @return \DateTime 
     */
    public function getFechaAprobadoRechazado()
    {
        return $this->fechaAprobadoRechazado;
    }

    /**
     * Set idEstadoActividad
     *
     * @param \AppBundle\Entity\EstadoActividad $idEstadoActividad
     * @return Actividad
     */
    public function setIdEstadoActividad(\AppBundle\Entity\EstadoActividad $idEstadoActividad = null)
    {
        $this->idEstadoActividad = $idEstadoActividad;

        return $this;
    }

    /**
     * Get idEstadoActividad
     *
     * @return \AppBundle\Entity\EstadoActividad 
     */
    public function getIdEstadoActividad()
    {
        return $this->idEstadoActividad;
    }

    /**
     * Set idMateria
     *
     * @param \AppBundle\Entity\Materia $idMateria
     * @return Actividad
     */
    public function setIdMateria(\AppBundle\Entity\Materia $idMateria = null)
    {
        $this->idMateria = $idMateria;

        return $this;
    }

    /**
     * Get idMateria
     *
     * @return \AppBundle\Entity\Materia 
     */
    public function getIdMateria()
    {
        return $this->idMateria;
    }

    /**
     * Set idReservaActividad
     *
     * @param \AppBundle\Entity\ReservaActividad $idReservaActividad
     * @return Actividad
     */
    public function setIdReservaActividad(\AppBundle\Entity\ReservaActividad $idReservaActividad = null)
    {
        $this->idReservaActividad = $idReservaActividad;

        return $this;
    }

    /**
     * Get idReservaActividad
     *
     * @return \AppBundle\Entity\ReservaActividad 
     */
    public function getIdReservaActividad()
    {
        return $this->idReservaActividad;
    }

    /**
     * Set idSolicitudReserva
     *
     * @param \AppBundle\Entity\SolicitudReserva $idSolicitudReserva
     * @return Actividad
     */
    public function setIdSolicitudReserva(\AppBundle\Entity\SolicitudReserva $idSolicitudReserva = null)
    {
        $this->idSolicitudReserva = $idSolicitudReserva;

        return $this;
    }

    /**
     * Get idSolicitudReserva
     *
     * @return \AppBundle\Entity\SolicitudReserva 
     */
    public function getIdSolicitudReserva()
    {
        return $this->idSolicitudReserva;
    }
}
