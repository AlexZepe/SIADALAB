<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 */
class Materia
{
    /**
     * @var integer
     */
    private $idMateria;

    /**
     * @var string
     */
    private $nomMateria;

    /**
     * @var string
     */
    private $codigoMateria;

    /**
     * @var \AppBundle\Entity\Ciclo
     */
    private $idCiclo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idCarrera;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idDocente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCarrera = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idDocente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idMateria
     *
     * @return integer 
     */
    public function getIdMateria()
    {
        return $this->idMateria;
    }

    /**
     * Set nomMateria
     *
     * @param string $nomMateria
     * @return Materia
     */
    public function setNomMateria($nomMateria)
    {
        $this->nomMateria = $nomMateria;

        return $this;
    }

    /**
     * Get nomMateria
     *
     * @return string 
     */
    public function getNomMateria()
    {
        return $this->nomMateria;
    }

    /**
     * Set codigoMateria
     *
     * @param string $codigoMateria
     * @return Materia
     */
    public function setCodigoMateria($codigoMateria)
    {
        $this->codigoMateria = $codigoMateria;

        return $this;
    }

    /**
     * Get codigoMateria
     *
     * @return string 
     */
    public function getCodigoMateria()
    {
        return $this->codigoMateria;
    }

    /**
     * Set idCiclo
     *
     * @param \AppBundle\Entity\Ciclo $idCiclo
     * @return Materia
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

    /**
     * Add idCarrera
     *
     * @param \AppBundle\Entity\Carrera $idCarrera
     * @return Materia
     */
    public function addIdCarrera(\AppBundle\Entity\Carrera $idCarrera)
    {
        $this->idCarrera[] = $idCarrera;

        return $this;
    }

    /**
     * Remove idCarrera
     *
     * @param \AppBundle\Entity\Carrera $idCarrera
     */
    public function removeIdCarrera(\AppBundle\Entity\Carrera $idCarrera)
    {
        $this->idCarrera->removeElement($idCarrera);
    }

    /**
     * Get idCarrera
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCarrera()
    {
        return $this->idCarrera;
    }

    /**
     * Add idDocente
     *
     * @param \AppBundle\Entity\Docente $idDocente
     * @return Materia
     */
    public function addIdDocente(\AppBundle\Entity\Docente $idDocente)
    {
        $this->idDocente[] = $idDocente;

        return $this;
    }

    /**
     * Remove idDocente
     *
     * @param \AppBundle\Entity\Docente $idDocente
     */
    public function removeIdDocente(\AppBundle\Entity\Docente $idDocente)
    {
        $this->idDocente->removeElement($idDocente);
    }

    /**
     * Get idDocente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdDocente()
    {
        return $this->idDocente;
    }
}
