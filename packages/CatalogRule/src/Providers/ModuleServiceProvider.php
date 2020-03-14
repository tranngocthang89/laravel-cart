<?php

namespace CatalogRule\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \CatalogRule\Models\CatalogRule::class,
        \CatalogRule\Models\CatalogRuleProduct::class,
        \CatalogRule\Models\CatalogRuleProductPrice::class
    ];
}