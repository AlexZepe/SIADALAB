<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCiclo
 */
class TipoCiclo
{
    /**
     * @var integer
     */
    private $idTipoCiclo;

    /**
     * @var string
     */
    private $nomTipoCiclo;


    /**
     * Get idTipoCiclo
     *
     * @return integer 
     */
    public function getIdTipoCiclo()
    {
        return $this->idTipoCiclo;
    }

    /**
     * Set nomTipoCiclo
     *
     * @param string $nomTipoCiclo
     * @return TipoCiclo
     */
    public function setNomTipoCiclo($nomTipoCiclo)
    {
        $this->nomTipoCiclo = $nomTipoCiclo;

        return $this;
    }

    /**
     * Get nomTipoCiclo
     *
     * @return string 
     */
    public function getNomTipoCiclo()
    {
        return $this->nomTipoCiclo;
    }
}
