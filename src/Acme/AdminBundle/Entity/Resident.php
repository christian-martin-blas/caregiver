<?php

namespace Acme\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resident
 *
 * @ORM\Table(name="resident")
 * @ORM\Entity
 */
class Resident
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
     * @ORM\Column(name="cognoms", type="string", length=255, nullable=true)
     */
    private $cognoms;



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
     * @return Resident
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
     * Set cognoms
     *
     * @param string $cognoms
     * @return Resident
     */
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;
    
        return $this;
    }

    /**
     * Get cognoms
     *
     * @return string 
     */
    public function getCognoms()
    {
        return $this->cognoms;
    }
}