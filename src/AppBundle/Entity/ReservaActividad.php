<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservaActividad
 */
class ReservaActividad
{
    /**
     * @var integer
     */
    private $idReservaActividad;

    /**
     * @var string
     */
    private $nomReservaActividad;

    /**
     * @var integer
     */
    private $cupo;

    /**
     * @var \DateTime
     */
    private $diaClase1;

    /**
     * @var \DateTime
     */
    private $diaClase2;

    /**
     * @var \DateTime
     */
    private $horaInicio;

    /**
     * @var \DateTime
     */
    private $horaFinal;

    /**
     * @var \DateTime
     */
    private $duracion;

    /**
     * @var \AppBundle\Entity\TipoActividad
     */
    private $idTipoActividad;


    /**
     * Get idReservaActividad
     *
     * @return integer 
     */
    public function getIdReservaActividad()
    {
        return $this->idReservaActividad;
    }

    /**
     * Set nomReservaActividad
     *
     * @param string $nomReservaActividad
     * @return ReservaActividad
     */
    public function setNomReservaActividad($nomReservaActividad)
    {
        $this->nomReservaActividad = $nomReservaActividad;

        return $this;
    }

    /**
     * Get nomReservaActividad
     *
     * @return string 
     */
    public function getNomReservaActividad()
    {
        return $this->nomReservaActividad;
    }

    /**
     * Set cupo
     *
     * @param integer $cupo
     * @return ReservaActividad
     */
    public function setCupo($cupo)
    {
        $this->cupo = $cupo;

        return $this;
    }

    /**
     * Get cupo
     *
     * @return integer 
     */
    public function getCupo()
    {
        return $this->cupo;
    }

    /**
     * Set diaClase1
     *
     * @param \DateTime $diaClase1
     * @return ReservaActividad
     */
    public function setDiaClase1($diaClase1)
    {
        $this->diaClase1 = $diaClase1;

        return $this;
    }

    /**
     * Get diaClase1
     *
     * @return \DateTime 
     */
    public function getDiaClase1()
    {
        return $this->diaClase1;
    }

    /**
     * Set diaClase2
     *
     * @param \DateTime $diaClase2
     * @return ReservaActividad
     */
    public function setDiaClase2($diaClase2)
    {
        $this->diaClase2 = $diaClase2;

        return $this;
    }

    /**
     * Get diaClase2
     *
     * @return \DateTime 
     */
    public function getDiaClase2()
    {
        return $this->diaClase2;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return ReservaActividad
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFinal
     *
     * @param \DateTime $horaFinal
     * @return ReservaActividad
     */
    public function setHoraFinal($horaFinal)
    {
        $this->horaFinal = $horaFinal;

        return $this;
    }

    /**
     * Get horaFinal
     *
     * @return \DateTime 
     */
    public function getHoraFinal()
    {
        return $this->horaFinal;
    }

    /**
     * Set duracion
     *
     * @param \DateTime $duracion
     * @return ReservaActividad
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return \DateTime 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set idTipoActividad
     *
     * @param \AppBundle\Entity\TipoActividad $idTipoActividad
     * @return ReservaActividad
     */
    public function setIdTipoActividad(\AppBundle\Entity\TipoActividad $idTipoActividad = null)
    {
        $this->idTipoActividad = $idTipoActividad;

        return $this;
    }

    /**
     * Get idTipoActividad
     *
     * @return \AppBundle\Entity\TipoActividad 
     */
    public function getIdTipoActividad()
    {
        return $this->idTipoActividad;
    }
}
