<?php

namespace Category\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Category\Models\Category::class,
        \Category\Models\CategoryTranslation::class,
    ];
}