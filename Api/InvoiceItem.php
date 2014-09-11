<?php

namespace Sulu\Bundle\Sales\InvoiceBundle\Api;

use JMS\Serializer\Annotation\VirtualProperty;
use Sulu\Bundle\Sales\CoreBundle\Api\Item;
use Sulu\Component\Rest\ApiWrapper;
use JMS\Serializer\Annotation\SerializedName;
use Sulu\Bundle\Sales\InvoiceBundle\Entity\InvoiceItem as InvoiceItemEntity;

/**
 * Describes an item of a invoice
 * @package Sulu\Bundle\Sales\InvoiceBundle\Api
 */
class InvoiceItem extends ApiWrapper
{
    /**
     * @param InvoiceItemEntity $entity
     * @param string $locale
     */
    public function __construct(InvoiceItemEntity $entity, $locale) {
        $this->entity = $entity;
        $this->locale = $locale;
    }

    /**
     * Returns the id
     * @return int
     * @VirtualProperty
     * @SerializedName("id")
     */
    public function getId()
    {
        return $this->entity->getId();
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return InvoiceItem
     */
    public function setQuantity($quantity)
    {
        $this->entity->setQuantity($quantity);

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     * @VirtualProperty
     * @SerializedName("quantity")
     */
    public function getQuantity()
    {
        return $this->entity->getQuantity();
    }

    /**
     * Set note
     *
     * @param string $note
     * @return InvoiceItem
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
     * Set invoice
     *
     * @param \Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice $invoice
     * @return InvoiceItem
     */
    public function setInvoice(\Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice $invoice)
    {
        $this->entity->setInvoice($invoice);

        return $this;
    }

//    /**
//     * Get Invoice
//     * @return \Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice
//     */
//    public function getInvoice()
//    {
//        return $this->entity->getInvoice();
//    }

    /**
     * Set item
     *
     * @param \Sulu\Bundle\Sales\CoreBundle\Entity\Item $item
     * @return InvoiceItem
     */
    public function setItem(\Sulu\Bundle\Sales\CoreBundle\Entity\Item $item)
    {
        $this->entity->setItem($item);

        return $this;
    }

    /**
     * Get item
     *
     * @return \Sulu\Bundle\Sales\CoreBundle\Entity\Item
     * @VirtualProperty
     * @SerializedName("item")
     */
    public function getItem()
    {
        return new Item($this->entity->getItem(), $this->locale);
    }
}
