<?php

return [
    'modules' => [
        /**
         * Example:
         * VendorA\ModuleX\Providers\ModuleServiceProvider::class,
         * VendorB\ModuleY\Providers\ModuleServiceProvider::class
         *
         */

        \Attribute\Providers\ModuleServiceProvider::class,
        \Category\Providers\ModuleServiceProvider::class,
        \Checkout\Providers\ModuleServiceProvider::class,
        \Core\Providers\ModuleServiceProvider::class,
        \Customer\Providers\ModuleServiceProvider::class,
        \Inventory\Providers\ModuleServiceProvider::class,
        \Product\Providers\ModuleServiceProvider::class,
        \Sales\Providers\ModuleServiceProvider::class,
        \Tax\Providers\ModuleServiceProvider::class,
        \User\Providers\ModuleServiceProvider::class,
        \CatalogRule\Providers\ModuleServiceProvider::class,
        \CartRule\Providers\ModuleServiceProvider::class,
        \CMS\Providers\ModuleServiceProvider::class
    ]
];