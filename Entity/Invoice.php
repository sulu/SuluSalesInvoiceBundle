<?php

namespace Sulu\Bundle\Sales\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 */
class Invoice
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $invoiceNumber;

    /**
     * @var string
     */
    private $customerName;

    /**
     * @var string
     */
    private $termsOfDeliveryContent;

    /**
     * @var boolean
     */
    private $taxfree;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $changed;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Sulu\Bundle\Sales\OrderBundle\Entity\OrderAddress
     */
    private $invoiceAddress;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $invoiceItems;

    /**
     * @var \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus
     */
    private $status;

    /**
     * @var \Sulu\Bundle\ContactBundle\Entity\TermsOfPayment
     */
    private $termsOfPayment;

    /**
     * @var \Sulu\Bundle\Sales\OrderBundle\Entity\Order
     */
    private $order;

    /**
     * @var \Sulu\Bundle\SecurityBundle\Entity\User
     */
    private $changer;

    /**
     * @var \Sulu\Bundle\SecurityBundle\Entity\User
     */
    private $creator;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->invoiceItems = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set number
     *
     * @param string $number
     * @return Invoice
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set invoiceNumber
     *
     * @param string $invoiceNumber
     * @return Invoice
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    
        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string 
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     * @return Invoice
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    
        return $this;
    }

    /**
     * Get customerName
     *
     * @return string 
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set termsOfDeliveryContent
     *
     * @param string $termsOfDeliveryContent
     * @return Invoice
     */
    public function setTermsOfDeliveryContent($termsOfDeliveryContent)
    {
        $this->termsOfDeliveryContent = $termsOfDeliveryContent;
    
        return $this;
    }

    /**
     * Get termsOfDeliveryContent
     *
     * @return string 
     */
    public function getTermsOfDeliveryContent()
    {
        return $this->termsOfDeliveryContent;
    }

    /**
     * Set taxfree
     *
     * @param boolean $taxfree
     * @return Invoice
     */
    public function setTaxfree($taxfree)
    {
        $this->taxfree = $taxfree;
    
        return $this;
    }

    /**
     * Get taxfree
     *
     * @return boolean 
     */
    public function getTaxfree()
    {
        return $this->taxfree;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return Invoice
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    
        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Invoice
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
     * Set created
     *
     * @param \DateTime $created
     * @return Invoice
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set changed
     *
     * @param \DateTime $changed
     * @return Invoice
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;
    
        return $this;
    }

    /**
     * Get changed
     *
     * @return \DateTime 
     */
    public function getChanged()
    {
        return $this->changed;
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
     * Set invoiceAddress
     *
     * @param \Sulu\Bundle\Sales\OrderBundle\Entity\OrderAddress $invoiceAddress
     * @return Invoice
     */
    public function setInvoiceAddress(\Sulu\Bundle\Sales\OrderBundle\Entity\OrderAddress $invoiceAddress = null)
    {
        $this->invoiceAddress = $invoiceAddress;
    
        return $this;
    }

    /**
     * Get invoiceAddress
     *
     * @return \Sulu\Bundle\Sales\OrderBundle\Entity\OrderAddress 
     */
    public function getInvoiceAddress()
    {
        return $this->invoiceAddress;
    }

    /**
     * Add invoiceItems
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem $invoiceItems
     * @return Invoice
     */
    public function addInvoiceItem(\Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem $invoiceItems)
    {
        $this->invoiceItems[] = $invoiceItems;
    
        return $this;
    }

    /**
     * Remove invoiceItems
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem $invoiceItems
     */
    public function removeInvoiceItem(\Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem $invoiceItems)
    {
        $this->invoiceItems->removeElement($invoiceItems);
    }

    /**
     * Get invoiceItems
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInvoiceItems()
    {
        return $this->invoiceItems;
    }

    /**
     * Set status
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus $status
     * @return Invoice
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

    /**
     * Set termsOfPayment
     *
     * @param \Sulu\Bundle\ContactBundle\Entity\TermsOfPayment $termsOfPayment
     * @return Invoice
     */
    public function setTermsOfPayment(\Sulu\Bundle\ContactBundle\Entity\TermsOfPayment $termsOfPayment = null)
    {
        $this->termsOfPayment = $termsOfPayment;
    
        return $this;
    }

    /**
     * Get termsOfPayment
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\TermsOfPayment 
     */
    public function getTermsOfPayment()
    {
        return $this->termsOfPayment;
    }

    /**
     * Set order
     *
     * @param \Sulu\Bundle\Sales\OrderBundle\Entity\Order $order
     * @return Invoice
     */
    public function setOrder(\Sulu\Bundle\Sales\OrderBundle\Entity\Order $order = null)
    {
        $this->order = $order;
    
        return $this;
    }

    /**
     * Get order
     *
     * @return \Sulu\Bundle\Sales\OrderBundle\Entity\Order 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set changer
     *
     * @param \Sulu\Bundle\SecurityBundle\Entity\User $changer
     * @return Invoice
     */
    public function setChanger(\Sulu\Bundle\SecurityBundle\Entity\User $changer = null)
    {
        $this->changer = $changer;
    
        return $this;
    }

    /**
     * Get changer
     *
     * @return \Sulu\Bundle\SecurityBundle\Entity\User 
     */
    public function getChanger()
    {
        return $this->changer;
    }

    /**
     * Set creator
     *
     * @param \Sulu\Bundle\SecurityBundle\Entity\User $creator
     * @return Invoice
     */
    public function setCreator(\Sulu\Bundle\SecurityBundle\Entity\User $creator = null)
    {
        $this->creator = $creator;
    
        return $this;
    }

    /**
     * Get creator
     *
     * @return \Sulu\Bundle\SecurityBundle\Entity\User 
     */
    public function getCreator()
    {
        return $this->creator;
    }
}
