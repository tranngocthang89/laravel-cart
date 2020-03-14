<?php

namespace Product\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Product\Models\Product::class,
        \Product\Models\ProductAttributeValue::class,
        \Product\Models\ProductFlat::class,
        \Product\Models\ProductImage::class,
        \Product\Models\ProductInventory::class,
        \Product\Models\ProductOrderedInventory::class,
        \Product\Models\ProductReview::class,
        \Product\Models\ProductSalableInventory::class,
        \Product\Models\ProductDownloadableSample::class,
        \Product\Models\ProductDownloadableLink::class,
        \Product\Models\ProductGroupedProduct::class,
        \Product\Models\ProductBundleOption::class,
        \Product\Models\ProductBundleOptionTranslation::class,
        \Product\Models\ProductBundleOptionProduct::class,
    ];
}