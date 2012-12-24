<?php

namespace Acme\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Esdeveniment
 *
 * @ORM\Table(name="esdeveniment")
 * @ORM\Entity
 */
class Esdeveniment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="motiu", type="string", length=255, nullable=true)
     */
    private $motiu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataEsd", type="datetime", nullable=true)
     */
    private $dataesd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAlarma", type="datetime", nullable=true)
     */
    private $dataalarma;

    /**
     * @var string
     *
     * @ORM\Column(name="periodicitat", type="string", length=255, nullable=true)
     */
    private $periodicitat;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Esdeveniment
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set motiu
     *
     * @param string $motiu
     * @return Esdeveniment
     */
    public function setMotiu($motiu)
    {
        $this->motiu = $motiu;
    
        return $this;
    }

    /**
     * Get motiu
     *
     * @return string 
     */
    public function getMotiu()
    {
        return $this->motiu;
    }

    /**
     * Set dataesd
     *
     * @param \DateTime $dataesd
     * @return Esdeveniment
     */
    public function setDataesd($dataesd)
    {
        $this->dataesd = $dataesd;
    
        return $this;
    }

    /**
     * Get dataesd
     *
     * @return \DateTime 
     */
    public function getDataesd()
    {
        return $this->dataesd;
    }

    /**
     * Set dataalarma
     *
     * @param \DateTime $dataalarma
     * @return Esdeveniment
     */
    public function setDataalarma($dataalarma)
    {
        $this->dataalarma = $dataalarma;
    
        return $this;
    }

    /**
     * Get dataalarma
     *
     * @return \DateTime 
     */
    public function getDataalarma()
    {
        return $this->dataalarma;
    }

    /**
     * Set periodicitat
     *
     * @param string $periodicitat
     * @return Esdeveniment
     */
    public function setPeriodicitat($periodicitat)
    {
        $this->periodicitat = $periodicitat;
    
        return $this;
    }

    /**
     * Get periodicitat
     *
     * @return string 
     */
    public function getPeriodicitat()
    {
        return $this->periodicitat;
    }
}