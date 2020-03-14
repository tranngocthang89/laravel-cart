<?php

namespace Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('checkout.order.save.after', 'Admin\Listeners\Order@sendNewOrderMail');

        Event::listen('sales.invoice.save.after', 'Admin\Listeners\Order@sendNewInvoiceMail');

        Event::listen('sales.shipment.save.after', 'Admin\Listeners\Order@sendNewShipmentMail');

        Event::listen('sales.order.cancel.after','Admin\Listeners\Order@sendCancelOrderMail');

        Event::listen('sales.refund.save.after','Admin\Listeners\Order@sendNewRefundMail');
    }
}