<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoAula
 */
class EstadoAula
{
    /**
     * @var integer
     */
    private $idEstadoAula;

    /**
     * @var string
     */
    private $nomEstadoAula;


    /**
     * Get idEstadoAula
     *
     * @return integer 
     */
    public function getIdEstadoAula()
    {
        return $this->idEstadoAula;
    }

    /**
     * Set nomEstadoAula
     *
     * @param string $nomEstadoAula
     * @return EstadoAula
     */
    public function setNomEstadoAula($nomEstadoAula)
    {
        $this->nomEstadoAula = $nomEstadoAula;

        return $this;
    }

    /**
     * Get nomEstadoAula
     *
     * @return string 
     */
    public function getNomEstadoAula()
    {
        return $this->nomEstadoAula;
    }
}
