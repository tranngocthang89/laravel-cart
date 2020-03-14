<?php

namespace Tax\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Tax\Models\TaxCategory::class,
        \Tax\Models\TaxMap::class,
        \Tax\Models\TaxRate::class,
    ];
}