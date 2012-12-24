<?php

namespace Proxies\__CG__\Acme\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Esdeveniment extends \Acme\AdminBundle\Entity\Esdeveniment implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setMotiu($motiu)
    {
        $this->__load();
        return parent::setMotiu($motiu);
    }

    public function getMotiu()
    {
        $this->__load();
        return parent::getMotiu();
    }

    public function setDataesd($dataesd)
    {
        $this->__load();
        return parent::setDataesd($dataesd);
    }

    public function getDataesd()
    {
        $this->__load();
        return parent::getDataesd();
    }

    public function setDataalarma($dataalarma)
    {
        $this->__load();
        return parent::setDataalarma($dataalarma);
    }

    public function getDataalarma()
    {
        $this->__load();
        return parent::getDataalarma();
    }

    public function setPeriodicitat($periodicitat)
    {
        $this->__load();
        return parent::setPeriodicitat($periodicitat);
    }

    public function getPeriodicitat()
    {
        $this->__load();
        return parent::getPeriodicitat();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nom', 'motiu', 'dataesd', 'dataalarma', 'periodicitat');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}