<?php

namespace Sulu\Bundle\Sales\InvoiceBundle\Api;

use JMS\Serializer\Annotation\VirtualProperty;
use Sulu\Bundle\Sales\CoreBundle\Api\Item;
use Sulu\Bundle\Sales\OrderBundle\Api\Order;
use Sulu\Component\Rest\ApiWrapper;
use Hateoas\Configuration\Annotation\Relation;
use JMS\Serializer\Annotation\SerializedName;
use Sulu\Component\Security\UserInterface;
use Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice as InvoiceEntity;

/**
 * The Invoice class which will be exported to the API
 * @package Sulu\Bundle\Sales\InvoiceBundle\Api
 * @Relation("self", href="expr('/api/admin/invoices/' ~ object.getId())")
 */
class Invoice extends ApiWrapper
{
    /**
     * @param InvoiceEntity $invoice The invoice to wrap
     * @param string $locale The locale of this invoice
     */
    public function __construct(InvoiceEntity $invoice, $locale)
    {
        $this->entity = $invoice;
        $this->locale = $locale;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Invoice
     */
    public function setNumber($number)
    {
        $this->entity->setNumber($number);

        return $this;
    }

    /**
     * @return string
     * @VirtualProperty
     * @SerializedName("number")
     */
    public function getNumber()
    {
        return $this->entity->getNumber();
    }

    /**
     * Set invoiceNumber
     *
     * @param string $invoiceNumber
     * @return Invoice
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->entity->setInvoiceNumber($invoiceNumber);

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string
     * @VirtualProperty
     * @SerializedName("invoiceNumber")
     */
    public function getInvoiceNumber()
    {
        return $this->entity->getInvoiceNumber();
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     * @return Invoice
     */
    public function setCustomerName($customerName)
    {
        $this->entity->setCustomerName($customerName);

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     * @VirtualProperty
     * @SerializedName("customerName")
     */
    public function getCustomerName()
    {
        return $this->entity->getCustomerName();
    }

    /**
     * Set termsOfDeliveryContent
     *
     * @param string $termsOfDeliveryContent
     * @return Invoice
     */
    public function setTermsOfDeliveryContent($termsOfDeliveryContent)
    {
        $this->entity->setTermsOfDeliveryContent($termsOfDeliveryContent);

        return $this;
    }

    /**
     * Get termsOfDeliveryContent
     *
     * @return string
     * @VirtualProperty
     * @SerializedName("termsOfDeliveryContent")
     */
    public function getTermsOfDeliveryContent()
    {
        return $this->entity->getTermsOfDeliveryContent();
    }

    /**
     * Set width
     *
     * @param float $width
     * @return Invoice
     */
    public function setWidth($width)
    {
        $this->entity->setWidth($width);

        return $this;
    }

    /**
     * Get width
     *
     * @return float
     * @VirtualProperty
     * @SerializedName("width")
     */
    public function getWidth()
    {
        return $this->entity->getWidth();
    }

    /**
     * Set height
     *
     * @param float $height
     * @return Invoice
     */
    public function setHeight($height)
    {
        $this->entity->setHeight($height);

        return $this;
    }

    /**
     * Get height
     *
     * @return float
     * @VirtualProperty
     * @SerializedName("height")
     */
    public function getHeight()
    {
        return $this->entity->getHeight();
    }

    /**
     * Set length
     *
     * @param float $length
     * @return Invoice
     *
     */
    public function setLength($length)
    {
        $this->entity->setLength($length);

        return $this;
    }

    /**
     * Get length
     *
     * @return float
     * @VirtualProperty
     * @SerializedName("length")
     */
    public function getLength()
    {
        return $this->entity->getLength();
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return Invoice
     */
    public function setWeight($weight)
    {
        $this->entity->setWeight($weight);

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     * @VirtualProperty
     * @SerializedName("weight")
     */
    public function getWeight()
    {
        return $this->entity->getWeight();
    }

    /**
     * Set trackingId
     *
     * @param string $trackingId
     * @return Invoice
     */
    public function setTrackingId($trackingId)
    {
        $this->entity->setTrackingId($trackingId);

        return $this;
    }

    /**
     * Get trackingId
     *
     * @return string
     * @VirtualProperty
     * @SerializedName("trackingId")
     */
    public function getTrackingId()
    {
        return $this->entity->getTrackingId();
    }

    /**
     * Set trackingUrl
     *
     * @param string $trackingUrl
     * @return Invoice
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->entity->setTrackingUrl($trackingUrl);

        return $this;
    }

    /**
     * Get trackingUrl
     *
     * @return string
     * @VirtualProperty
     * @SerializedName("trackingUrl")
     */
    public function getTrackingUrl()
    {
        return $this->entity->getTrackingUrl();
    }

    /**
     * Set commission
     *
     * @param string $commission
     * @return Invoice
     */
    public function setCommission($commission)
    {
        $this->entity->setCommission($commission);

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     * @VirtualProperty
     * @SerializedName("commission")
     */
    public function getCommission()
    {
        return $this->entity->getCommission();
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Invoice
     */
    public function setNote($note)
    {
        $this->entity->setNote($note);

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     * @VirtualProperty
     * @SerializedName("note")
     */
    public function getNote()
    {
        return $this->entity->getNote();
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Invoice
     */
    public function setCreated($created)
    {
        $this->entity->setCreated($created);

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     * @VirtualProperty
     * @SerializedName("created")
     */
    public function getCreated()
    {
        return $this->entity->getCreated();
    }

    /**
     * Set changed
     *
     * @param \DateTime $changed
     * @return Invoice
     */
    public function setChanged($changed)
    {
        $this->entity->setChanged($changed);

        return $this;
    }

    /**
     * Get changed
     *
     * @return \DateTime
     * @VirtualProperty
     * @SerializedName("changed")
     */
    public function getChanged()
    {
        return $this->entity->getChanged();
    }

    /**
     * Set expectedDeliveryDate
     *
     * @param \DateTime $expectedDeliveryDate
     * @return Invoice
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate)
    {
        $this->entity->setExpectedDeliveryDate($expectedDeliveryDate);

        return $this;
    }

    /**
     * Get expectedDeliveryDate
     *
     * @return \DateTime
     * @VirtualProperty
     * @SerializedName("expectedDeliveryDate")
     */
    public function getExpectedDeliveryDate()
    {
        return $this->entity->getExpectedDeliveryDate();
    }

    /**
     * Get id
     *
     * @return integer
     * @VirtualProperty
     * @SerializedName("id")
     */
    public function getId()
    {
        return $this->entity->getId();
    }

    /**
     * Set deliveryAddress
     *
     * @param \Sulu\Bundle\Sales\OrderBundle\Entity\OrderAddress $deliveryAddress
     * @return Invoice
     */
    public function setDeliveryAddress(\Sulu\Bundle\Sales\OrderBundle\Entity\OrderAddress $deliveryAddress = null)
    {
        $this->entity->setDeliveryAddress($deliveryAddress);

        return $this;
    }

    /**
     * Get deliveryAddress
     *
     * @return \Sulu\Bundle\Sales\OrderBundle\Entity\OrderAddress
     * @VirtualProperty
     * @SerializedName("deliveryAddress")
     */
    public function getDeliveryAddress()
    {
        return $this->entity->getDeliveryAddress();
    }

    /**
     * Add invoiceItems
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem $invoiceItems
     * @return Invoice
     */
    public function addInvoiceItem(\Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem $invoiceItems)
    {
        $this->entity->addInvoiceItem($invoiceItems);

        return $this;
    }

    /**
     * Remove invoiceItems
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem $invoiceItems
     */
    public function removeInvoiceItem(\Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem $invoiceItems)
    {
        $this->entity->removeInvoiceItem($invoiceItems);
    }

    /**
     * Get invoiceItems
     *
     * @return Array
     * @VirtualProperty
     * @SerializedName("items")
     */
    public function getItems()
    {
        $items = array();
        foreach ($this->entity->getInvoiceItems() as $invoiceItem) {
            $items[] = new InvoiceItem($invoiceItem, $this->locale);
        }

        return $items;
    }

    /**
     * Set status
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus $status
     * @return Invoice
     */
    public function setStatus(\Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus $status)
    {
        $this->entity->setStatus($status);

        return $this;
    }

    /**
     * Get status
     *
     * @return \Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceStatus
     * @VirtualProperty
     * @SerializedName("status")
     */
    public function getStatus()
    {
        return new InvoiceStatus($this->entity->getStatus(), $this->locale);
    }

    /**
     * Set termsOfDelivery
     *
     * @param \Sulu\Bundle\ContactBundle\Entity\TermsOfDelivery $termsOfDelivery
     * @return Invoice
     */
    public function setTermsOfDelivery(\Sulu\Bundle\ContactBundle\Entity\TermsOfDelivery $termsOfDelivery = null)
    {
        $this->entity->setTermsOfDelivery($termsOfDelivery);

        return $this;
    }

    /**
     * Get termsOfDelivery
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\TermsOfDelivery
     * @VirtualProperty
     * @SerializedName("termsOfDelivery")
     */
    public function getTermsOfDelivery()
    {
        return $this->entity->getTermsOfDelivery();
    }

    /**
     * Set order
     *
     * @param \Sulu\Bundle\Sales\OrderBundle\Entity\Order $order
     * @return Invoice
     */
    public function setOrder(\Sulu\Bundle\Sales\OrderBundle\Entity\Order $order = null)
    {
        $this->entity->setOrder($order);

        return $this;
    }

    /**
     * Get order
     *
     * @return \Sulu\Bundle\Sales\OrderBundle\Entity\Order
     * @VirtualProperty
     * @SerializedName("order")
     */
    public function getOrder()
    {
        return new Order($this->entity->getOrder(), $this->locale);
    }

    /**
     * Set changer
     *
     * @param UserInterface $changer
     * @return Invoice
     */
    public function setChanger(UserInterface $changer = null)
    {
        $this->entity->setChanger($changer);

        return $this;
    }

    /**
     * Set creator
     *
     * @param UserInterface $creator
     * @return Invoice
     */
    public function setCreator(UserInterface $creator = null)
    {
        $this->entity->setCreator($creator);

        return $this;
    }
}
