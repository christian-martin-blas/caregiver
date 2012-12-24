<?php

namespace Acme\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserResident
 *
 * @ORM\Table(name="user_resident")
 * @ORM\Entity
 */
class UserResident
{
    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Resident
     *
     * @ORM\ManyToOne(targetEntity="Resident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResident", referencedColumnName="id")
     * })
     */
    private $idresident;



    /**
     * Set iduser
     *
     * @param \Acme\AdminBundle\Entity\User $iduser
     * @return UserResident
     */
    public function setIduser(\Acme\AdminBundle\Entity\User $iduser)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Acme\AdminBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idresident
     *
     * @param \Acme\AdminBundle\Entity\Resident $idresident
     * @return UserResident
     */
    public function setIdresident(\Acme\AdminBundle\Entity\Resident $idresident = null)
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
}