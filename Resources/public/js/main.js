/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require.config({
    paths: {
        sulusalesinvoice: '../../sulusalesinvoice/js',
        'util/invoiceStatus': '../../sulusalesinvoice/js/util/invoiceStatus'
    }
});

define({

    name: "SuluSalesInvoiceBundle",

    initialize: function(app) {

        'use strict';

        var sandbox = app.sandbox;

        app.components.addSource('sulusalesinvoice', '/bundles/sulusalesinvoice/js/components');

        // list all invoices
        sandbox.mvc.routes.push({
            route: 'sales/invoices',
            callback: function() {
                this.html('<div data-aura-component="invoices@sulusalesinvoice" data-aura-display="list"/>');
            }
        });

        // show form for creating a new invoice
        sandbox.mvc.routes.push({
            route: 'sales/invoices/add',
            callback: function() {
                this.html(
                    '<div data-aura-component="invoices/components/content@sulusalesinvoice" data-aura-display="content" data-aura-content="form" />'
                );
            }
        });

        // show form for editing a invoice
        sandbox.mvc.routes.push({
            route: 'sales/invoices/edit::id/:content',
            callback: function(id, content) {
                this.html(
                    '<div data-aura-component="invoices/components/content@sulusalesinvoice" data-aura-display="content" data-aura-content="' + content + '" data-aura-id="' + id + '"/>'
                );
            }
        });

        /** orders */

        // show form for creating a new invoice
        sandbox.mvc.routes.push({
            route: 'sales/orders/edit::id/invoices/add',
            callback: function(id) {
                this.html(
                    '<div data-aura-component="invoices/components/content@sulusalesinvoice" data-aura-display="content" data-aura-content="form" data-aura-order-id="' + id + '"/>'
                );
            }
        });
    }
});
