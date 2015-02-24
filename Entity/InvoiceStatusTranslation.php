<?php

namespace Sulu\Bundle\Sales\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceStatusTranslation
 */
class InvoiceStatusTranslation
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus
     */
    private $status;


    /**
     * Set name
     *
     * @param string $name
     * @return InvoiceStatusTranslation
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
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
     * Set locale
     *
     * @param string $locale
     * @return InvoiceStatusTranslation
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    
        return $this;
    }

    /**
     * Get locale
     *
     * @return string 
     */
    public function getLocale()
    {
        return $this->locale;
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
     * Set status
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus $status
     * @return InvoiceStatusTranslation
     */
    public function setStatus(\Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus $status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
