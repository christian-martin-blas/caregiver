<?php
 
namespace Acme\AdminBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class Usuario extends BaseUser
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Agrega un rol al usuario.
     * @throws Exception
     * @param Rol $rol 
     */
    public function addRole( $rol )
    {
    $this->roles = array();
    if($rol == 1) {
      array_push($this->roles, 'ROLE_ADMIN');
    }
    else if($rol == 2) {
      array_push($this->roles, 'ROLE_USER');
    }
    }

}