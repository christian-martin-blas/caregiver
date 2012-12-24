<?php

namespace Acme\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResidentEsdeveniment
 *
 * @ORM\Table(name="resident_esdeveniment")
 * @ORM\Entity
 */
class ResidentEsdeveniment
{
    /**
     * @var \Resident
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Resident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResident", referencedColumnName="id")
     * })
     */
    private $idresident;

    /**
     * @var \Esdeveniment
     *
     * @ORM\ManyToOne(targetEntity="Esdeveniment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEsdeveniment", referencedColumnName="id")
     * })
     */
    private $idesdeveniment;



    /**
     * Set idresident
     *
     * @param \Acme\AdminBundle\Entity\Resident $idresident
     * @return ResidentEsdeveniment
     */
    public function setIdresident(\Acme\AdminBundle\Entity\Resident $idresident)
    {
        $this->idresident = $idresident;
    
        return $this;
    }

    /**
     * Get idresident
     *
     * @return \Acme\AdminBundle\Entity\Resident 
     */
    public function getIdresident()
    {
        return $this->idresident;
    }

    /**
     * Set idesdeveniment
     *
     * @param \Acme\AdminBundle\Entity\Esdeveniment $idesdeveniment
     * @return ResidentEsdeveniment
     */
    public function setIdesdeveniment(\Acme\AdminBundle\Entity\Esdeveniment $idesdeveniment = null)
    {
        $this->idesdeveniment = $idesdeveniment;
    
        return $this;
    }

    /**
     * Get idesdeveniment
     *
     * @return \Acme\AdminBundle\Entity\Esdeveniment 
     */
    public function getIdesdeveniment()
    {
        return $this->idesdeveniment;
    }
}