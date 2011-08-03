<?php

namespace Ryans\CMS\ModulesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ryans\CMS\ModulesBundle\Entity\ModuleType
 *
 * @ORM\Table(name="tipos_modulos")
 * @ORM\Entity
 */
class ModuleType
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id_tipos_modulos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $description;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $active;
    
    public function __toString()
    {
    	return $this->getName();
    }

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}