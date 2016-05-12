<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoActividad
 */
class EstadoActividad
{
    /**
     * @var integer
     */
    private $idEstadoActividad;

    /**
     * @var string
     */
    private $nomEstadoActividad;

    /**
     * @var string
     */
    private $descripcionEstadoActividad;


    /**
     * Get idEstadoActividad
     *
     * @return integer 
     */
    public function getIdEstadoActividad()
    {
        return $this->idEstadoActividad;
    }

    /**
     * Set nomEstadoActividad
     *
     * @param string $nomEstadoActividad
     * @return EstadoActividad
     */
    public function setNomEstadoActividad($nomEstadoActividad)
    {
        $this->nomEstadoActividad = $nomEstadoActividad;

        return $this;
    }

    /**
     * Get nomEstadoActividad
     *
     * @return string 
     */
    public function getNomEstadoActividad()
    {
        return $this->nomEstadoActividad;
    }

    /**
     * Set descripcionEstadoActividad
     *
     * @param string $descripcionEstadoActividad
     * @return EstadoActividad
     */
    public function setDescripcionEstadoActividad($descripcionEstadoActividad)
    {
        $this->descripcionEstadoActividad = $descripcionEstadoActividad;

        return $this;
    }

    /**
     * Get descripcionEstadoActividad
     *
     * @return string 
     */
    public function getDescripcionEstadoActividad()
    {
        return $this->descripcionEstadoActividad;
    }
}
