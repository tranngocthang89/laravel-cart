<?php

namespace Customer\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Customer\Models\Customer::class,
        \Customer\Models\CustomerAddress::class,
        \Customer\Models\CustomerGroup::class,
        \Customer\Models\Wishlist::class,
    ];
}