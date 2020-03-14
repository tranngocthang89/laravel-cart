<?php

namespace Sales\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Sales\Models\Order::class,
        \Sales\Models\OrderItem::class,
        \Sales\Models\DownloadableLinkPurchased::class,
        \Sales\Models\OrderAddress::class,
        \Sales\Models\OrderPayment::class,
        \Sales\Models\Invoice::class,
        \Sales\Models\InvoiceItem::class,
        \Sales\Models\Shipment::class,
        \Sales\Models\ShipmentItem::class,
        \Sales\Models\Refund::class,
        \Sales\Models\RefundItem::class,
    ];
}