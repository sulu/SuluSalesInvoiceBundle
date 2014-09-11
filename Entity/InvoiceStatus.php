<?php

namespace Sulu\Bundle\Sales\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceStatus
 */
class InvoiceStatus
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $invoice;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->invoice = new \Doctrine\Common\Collections\ArrayCollection();
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add invoice
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice $invoice
     * @return InvoiceStatus
     */
    public function addInvoice(\Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice $invoice)
    {
        $this->invoice[] = $invoice;
    
        return $this;
    }

    /**
     * Remove invoice
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice $invoice
     */
    public function removeInvoice(\Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice $invoice)
    {
        $this->invoice->removeElement($invoice);
    }

    /**
     * Get invoice
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Add translations
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatusTranslation $translations
     * @return InvoiceStatus
     */
    public function addTranslation(\Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatusTranslation $translations)
    {
        $this->translations[] = $translations;
    
        return $this;
    }

    /**
     * Remove translations
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatusTranslation $translations
     */
    public function removeTranslation(\Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatusTranslation $translations)
    {
        $this->translations->removeElement($translations);
    }

    /**
     * Get translations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTranslations()
    {
        return $this->translations;
    }
}
