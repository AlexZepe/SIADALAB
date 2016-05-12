<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoActividad
 */
class TipoActividad
{
    /**
     * @var integer
     */
    private $idTipoActividad;

    /**
     * @var string
     */
    private $nomTipoActividad;

    /**
     * @var \AppBundle\Entity\Horario
     */
    private $idHorario;


    /**
     * Get idTipoActividad
     *
     * @return integer 
     */
    public function getIdTipoActividad()
    {
        return $this->idTipoActividad;
    }

    /**
     * Set nomTipoActividad
     *
     * @param string $nomTipoActividad
     * @return TipoActividad
     */
    public function setNomTipoActividad($nomTipoActividad)
    {
        $this->nomTipoActividad = $nomTipoActividad;

        return $this;
    }

    /**
     * Get nomTipoActividad
     *
     * @return string 
     */
    public function getNomTipoActividad()
    {
        return $this->nomTipoActividad;
    }

    /**
     * Set idHorario
     *
     * @param \AppBundle\Entity\Horario $idHorario
     * @return TipoActividad
     */
    public function setIdHorario(\AppBundle\Entity\Horario $idHorario = null)
    {
        $this->idHorario = $idHorario;

        return $this;
    }

    /**
     * Get idHorario
     *
     * @return \AppBundle\Entity\Horario 
     */
    public function getIdHorario()
    {
        return $this->idHorario;
    }
}
