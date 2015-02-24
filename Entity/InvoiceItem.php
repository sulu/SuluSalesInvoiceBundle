<?php

namespace Sulu\Bundle\Sales\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceItem
 */
class InvoiceItem
{
    /**
     * @var float
     */
    private $quantity;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice
     */
    private $invoice;

    /**
     * @var \Sulu\Bundle\Sales\CoreBundle\Entity\Item
     */
    private $item;


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return InvoiceItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return InvoiceItem
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
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
     * Set invoice
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice $invoice
     * @return InvoiceItem
     */
    public function setInvoice(\Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice $invoice)
    {
        $this->invoice = $invoice;
    
        return $this;
    }

    /**
     * Get invoice
     *
     * @return \Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set item
     *
     * @param \Sulu\Bundle\Sales\CoreBundle\Entity\Item $item
     * @return InvoiceItem
     */
    public function setItem(\Sulu\Bundle\Sales\CoreBundle\Entity\Item $item)
    {
        $this->item = $item;
    
        return $this;
    }

    /**
     * Get item
     *
     * @return \Sulu\Bundle\Sales\CoreBundle\Entity\Item 
     */
    public function getItem()
    {
        return $this->item;
    }
}
