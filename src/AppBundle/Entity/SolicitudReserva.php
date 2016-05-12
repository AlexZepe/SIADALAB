<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SolicitudReserva
 */
class SolicitudReserva
{
    /**
     * @var integer
     */
    private $idSolicitudReserva;

    /**
     * @var string
     */
    private $nomSolicitudReserva;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $idUsuario;


    /**
     * Get idSolicitudReserva
     *
     * @return integer 
     */
    public function getIdSolicitudReserva()
    {
        return $this->idSolicitudReserva;
    }

    /**
     * Set nomSolicitudReserva
     *
     * @param string $nomSolicitudReserva
     * @return SolicitudReserva
     */
    public function setNomSolicitudReserva($nomSolicitudReserva)
    {
        $this->nomSolicitudReserva = $nomSolicitudReserva;

        return $this;
    }

    /**
     * Get nomSolicitudReserva
     *
     * @return string 
     */
    public function getNomSolicitudReserva()
    {
        return $this->nomSolicitudReserva;
    }

    /**
     * Set idUsuario
     *
     * @param \AppBundle\Entity\Usuario $idUsuario
     * @return SolicitudReserva
     */
    public function setIdUsuario(\AppBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
