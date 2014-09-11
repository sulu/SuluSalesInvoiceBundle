<?php
/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\Sales\InvoiceBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Sulu\Bundle\Sales\InvoiceBundle\Entity\Invoice;

/**
 * Class AccountListener
 * @package Sulu\Bundle\Sales\InvoiceBundle\EventListener
 */
class InvoiceListener
{
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Invoice) {
            $entityManager = $args->getEntityManager();
            // after saving check if number is set, else set a new one
            if ($entity->getNumber() === null) {
                $entity->setNumber(sprintf('%05d', $entity->getId()));
                $entityManager->flush();
            }
        }
    }
}
