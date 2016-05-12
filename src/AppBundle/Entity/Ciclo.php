<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciclo
 */
class Ciclo
{
    /**
     * @var integer
     */
    private $idCiclo;

    /**
     * @var \DateTime
     */
    private $anio;

    /**
     * @var \DateTime
     */
    private $inicioCiclo;

    /**
     * @var \DateTime
     */
    private $finCiclo;

    /**
     * @var \DateTime
     */
    private $inicioHorario;

    /**
     * @var \DateTime
     */
    private $finHorario;

    /**
     * @var \DateTime
     */
    private $inicioClases;

    /**
     * @var \DateTime
     */
    private $finClases;

    /**
     * @var \AppBundle\Entity\TipoCiclo
     */
    private $idTipoCiclo;


    /**
     * Get idCiclo
     *
     * @return integer 
     */
    public function getIdCiclo()
    {
        return $this->idCiclo;
    }

    /**
     * Set anio
     *
     * @param \DateTime $anio
     * @return Ciclo
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return \DateTime 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set inicioCiclo
     *
     * @param \DateTime $inicioCiclo
     * @return Ciclo
     */
    public function setInicioCiclo($inicioCiclo)
    {
        $this->inicioCiclo = $inicioCiclo;

        return $this;
    }

    /**
     * Get inicioCiclo
     *
     * @return \DateTime 
     */
    public function getInicioCiclo()
    {
        return $this->inicioCiclo;
    }

    /**
     * Set finCiclo
     *
     * @param \DateTime $finCiclo
     * @return Ciclo
     */
    public function setFinCiclo($finCiclo)
    {
        $this->finCiclo = $finCiclo;

        return $this;
    }

    /**
     * Get finCiclo
     *
     * @return \DateTime 
     */
    public function getFinCiclo()
    {
        return $this->finCiclo;
    }

    /**
     * Set inicioHorario
     *
     * @param \DateTime $inicioHorario
     * @return Ciclo
     */
    public function setInicioHorario($inicioHorario)
    {
        $this->inicioHorario = $inicioHorario;

        return $this;
    }

    /**
     * Get inicioHorario
     *
     * @return \DateTime 
     */
    public function getInicioHorario()
    {
        return $this->inicioHorario;
    }

    /**
     * Set finHorario
     *
     * @param \DateTime $finHorario
     * @return Ciclo
     */
    public function setFinHorario($finHorario)
    {
        $this->finHorario = $finHorario;

        return $this;
    }

    /**
     * Get finHorario
     *
     * @return \DateTime 
     */
    public function getFinHorario()
    {
        return $this->finHorario;
    }

    /**
     * Set inicioClases
     *
     * @param \DateTime $inicioClases
     * @return Ciclo
     */
    public function setInicioClases($inicioClases)
    {
        $this->inicioClases = $inicioClases;

        return $this;
    }

    /**
     * Get inicioClases
     *
     * @return \DateTime 
     */
    public function getInicioClases()
    {
        return $this->inicioClases;
    }

    /**
     * Set finClases
     *
     * @param \DateTime $finClases
     * @return Ciclo
     */
    public function setFinClases($finClases)
    {
        $this->finClases = $finClases;

        return $this;
    }

    /**
     * Get finClases
     *
     * @return \DateTime 
     */
    public function getFinClases()
    {
        return $this->finClases;
    }

    /**
     * Set idTipoCiclo
     *
     * @param \AppBundle\Entity\TipoCiclo $idTipoCiclo
     * @return Ciclo
     */
    public function setIdTipoCiclo(\AppBundle\Entity\TipoCiclo $idTipoCiclo = null)
    {
        $this->idTipoCiclo = $idTipoCiclo;

        return $this;
    }

    /**
     * Get idTipoCiclo
     *
     * @return \AppBundle\Entity\TipoCiclo 
     */
    public function getIdTipoCiclo()
    {
        return $this->idTipoCiclo;
    }
}
