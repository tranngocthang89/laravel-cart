<?php

namespace Inventory\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Inventory\Models\InventorySource::class,
    ];
}