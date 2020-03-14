<?php

namespace Checkout\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Checkout\Models\Cart::class,
        \Checkout\Models\CartAddress::class,
        \Checkout\Models\CartItem::class,
        \Checkout\Models\CartPayment::class,
        \Checkout\Models\CartShippingRate::class,
    ];
}