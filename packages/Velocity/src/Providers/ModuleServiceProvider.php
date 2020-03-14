<?php

namespace Velocity\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Velocity\Models\Content::class,
        \Velocity\Models\Category::class
    ];
}