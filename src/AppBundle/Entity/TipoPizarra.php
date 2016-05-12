<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPizarra
 */
class TipoPizarra
{
    /**
     * @var integer
     */
    private $idPizarra;

    /**
     * @var string
     */
    private $nomPizarra;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idAula;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAula = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idPizarra
     *
     * @return integer 
     */
    public function getIdPizarra()
    {
        return $this->idPizarra;
    }

    /**
     * Set nomPizarra
     *
     * @param string $nomPizarra
     * @return TipoPizarra
     */
    public function setNomPizarra($nomPizarra)
    {
        $this->nomPizarra = $nomPizarra;

        return $this;
    }

    /**
     * Get nomPizarra
     *
     * @return string 
     */
    public function getNomPizarra()
    {
        return $this->nomPizarra;
    }

    /**
     * Add idAula
     *
     * @param \AppBundle\Entity\Aula $idAula
     * @return TipoPizarra
     */
    public function addIdAula(\AppBundle\Entity\Aula $idAula)
    {
        $this->idAula[] = $idAula;

        return $this;
    }

    /**
     * Remove idAula
     *
     * @param \AppBundle\Entity\Aula $idAula
     */
    public function removeIdAula(\AppBundle\Entity\Aula $idAula)
    {
        $this->idAula->removeElement($idAula);
    }

    /**
     * Get idAula
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdAula()
    {
        return $this->idAula;
    }
}
