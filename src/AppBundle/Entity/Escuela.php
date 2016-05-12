<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Escuela
 */
class Escuela
{
    /**
     * @var integer
     */
    private $idEscuela;

    /**
     * @var string
     */
    private $nomEscuela;


    /**
     * Get idEscuela
     *
     * @return integer 
     */
    public function getIdEscuela()
    {
        return $this->idEscuela;
    }

    /**
     * Set nomEscuela
     *
     * @param string $nomEscuela
     * @return Escuela
     */
    public function setNomEscuela($nomEscuela)
    {
        $this->nomEscuela = $nomEscuela;

        return $this;
    }

    /**
     * Get nomEscuela
     *
     * @return string 
     */
    public function getNomEscuela()
    {
        return $this->nomEscuela;
    }
}
