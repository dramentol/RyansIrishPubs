<?php

namespace Ryans\CMS\ModulesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ryans\CMS\ModulesBundle\Entity\Module
 *
 * @ORM\Table(name="modulos_laterales")
 * @ORM\Entity
 */
class Module
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id_modulos_laterales", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="titulo", type="string", length=50)
     */
    private $title;

    /**
     * @var text $text
     *
     * @ORM\Column(name="texto", type="text")
     */
    private $text;

    /**
     * @var string $image
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     */
    private $image;

    /**
     * @var string $alt
     *
     * @ORM\Column(name="alt", type="string", length=100)
     */
    private $alt;
    
    /**
    * @var ModuleType $moduleType
    *
    * @ORM\ManyToOne(targetEntity="ModuleType")
    * @ORM\JoinColumn(name="id_tipos_modulos", referencedColumnName="id_tipos_modulos")
    */
    private $moduleType;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $active;

    /**
     * @var smallint $location
     *
     * @ORM\Column(name="ubicacion", type="smallint")
     */
    private $location;

    /**
     * @var date $start_date
     *
     * @ORM\Column(name="fecha_inicio", type="date")
     */
    private $start_date;

    /**
     * @var date $end_date
     *
     * @ORM\Column(name="fecha_fin", type="date")
     */
    private $end_date;

    /**
     * @var string $border_color
     *
     * @ORM\Column(name="color_borde", type="string", length=8)
     */
    private $border_color;

    /**
     * @var string $link
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var string $ltitle
     *
     * @ORM\Column(name="ltitle", type="string", length=100)
     */
    private $ltitle;

    /**
     * @var smallint $order
     *
     * @ORM\Column(name="orden", type="smallint")
     */
    private $order;

    /**
     * @var boolean $blank
     *
     * @ORM\Column(name="blank", type="boolean")
     */
    private $blank;
    
    public function __toString()
    {
    	return $this->getTitle();
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param text $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return text 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set alt
     *
     * @param string $alt
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
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

    /**
     * Set location
     *
     * @param smallint $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return smallint 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set start_date
     *
     * @param date $startDate
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
    }

    /**
     * Get start_date
     *
     * @return date 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param date $endDate
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
    }

    /**
     * Get end_date
     *
     * @return date 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set border_color
     *
     * @param string $borderColor
     */
    public function setBorderColor($borderColor)
    {
        $this->border_color = $borderColor;
    }

    /**
     * Get border_color
     *
     * @return string 
     */
    public function getBorderColor()
    {
        return $this->border_color;
    }

    /**
     * Set link
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set ltitle
     *
     * @param string $ltitle
     */
    public function setLtitle($ltitle)
    {
        $this->ltitle = $ltitle;
    }

    /**
     * Get ltitle
     *
     * @return string 
     */
    public function getLtitle()
    {
        return $this->ltitle;
    }

    /**
     * Set order
     *
     * @param smallint $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * Get order
     *
     * @return smallint 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set blank
     *
     * @param boolean $blank
     */
    public function setBlank($blank)
    {
        $this->blank = $blank;
    }

    /**
     * Get blank
     *
     * @return boolean 
     */
    public function getBlank()
    {
        return $this->blank;
    }
}