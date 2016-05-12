<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docente
 */
class Docente
{
    /**
     * @var integer
     */
    private $idDocente;

    /**
     * @var string
     */
    private $nomDocente;

    /**
     * @var string
     */
    private $carnet;

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
     * Get idDocente
     *
     * @return integer 
     */
    public function getIdDocente()
    {
        return $this->idDocente;
    }

    /**
     * Set nomDocente
     *
     * @param string $nomDocente
     * @return Docente
     */
    public function setNomDocente($nomDocente)
    {
        $this->nomDocente = $nomDocente;

        return $this;
    }

    /**
     * Get nomDocente
     *
     * @return string 
     */
    public function getNomDocente()
    {
        return $this->nomDocente;
    }

    /**
     * Set carnet
     *
     * @param string $carnet
     * @return Docente
     */
    public function setCarnet($carnet)
    {
        $this->carnet = $carnet;

        return $this;
    }

    /**
     * Get carnet
     *
     * @return string 
     */
    public function getCarnet()
    {
        return $this->carnet;
    }

    /**
     * Add idMateria
     *
     * @param \AppBundle\Entity\Materia $idMateria
     * @return Docente
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
