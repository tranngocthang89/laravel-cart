<?php

namespace Attribute\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Attribute\Models\Attribute::class,
        \Attribute\Models\AttributeFamily::class,
        \Attribute\Models\AttributeGroup::class,
        \Attribute\Models\AttributeOption::class,
        \Attribute\Models\AttributeOptionTranslation::class,
        \Attribute\Models\AttributeTranslation::class,
    ];
}