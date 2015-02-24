<?php

namespace Sulu\Bundle\Sales\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sulu\Component\Rest\RestController;
use Hateoas\Representation\CollectionRepresentation;

class TemplateController extends RestController
{

    /**
     * Returns Template for list
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function invoiceListAction()
    {
        return $this->render(
            'SuluSalesInvoiceBundle:Template:invoice.list.html.twig'
        );
    }

    /**
     * Returns Template for list
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function invoiceFormAction()
    {
        return $this->render(
            'SuluSalesInvoiceBundle:Template:invoice.form.html.twig'
        );
    }
}
