<?php

namespace CMS\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \CMS\Models\CmsPage::class,
        \CMS\Models\CmsPageTranslation::class
    ];
}