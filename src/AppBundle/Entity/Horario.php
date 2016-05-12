<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 */
class Horario
{
    /**
     * @var integer
     */
    private $idHorario;

    /**
     * @var string
     */
    private $nomHorario;

    /**
     * @var \AppBundle\Entity\Ciclo
     */
    private $idCiclo;


    /**
     * Get idHorario
     *
     * @return integer 
     */
    public function getIdHorario()
    {
        return $this->idHorario;
    }

    /**
     * Set nomHorario
     *
     * @param string $nomHorario
     * @return Horario
     */
    public function setNomHorario($nomHorario)
    {
        $this->nomHorario = $nomHorario;

        return $this;
    }

    /**
     * Get nomHorario
     *
     * @return string 
     */
    public function getNomHorario()
    {
        return $this->nomHorario;
    }

    /**
     * Set idCiclo
     *
     * @param \AppBundle\Entity\Ciclo $idCiclo
     * @return Horario
     */
    public function setIdCiclo(\AppBundle\Entity\Ciclo $idCiclo = null)
    {
        $this->idCiclo = $idCiclo;

        return $this;
    }

    /**
     * Get idCiclo
     *
     * @return \AppBundle\Entity\Ciclo 
     */
    public function getIdCiclo()
    {
        return $this->idCiclo;
    }
}
