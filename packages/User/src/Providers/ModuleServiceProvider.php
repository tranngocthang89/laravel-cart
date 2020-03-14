<?php

namespace User\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \User\Models\Admin::class,
        \User\Models\Role::class,
    ];
}