<?php

namespace CartRule\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \CartRule\Models\CartRule::class,
        \CartRule\Models\CartRuleTranslation::class,
        \CartRule\Models\CartRuleCustomer::class,
        \CartRule\Models\CartRuleCoupon::class,
        \CartRule\Models\CartRuleCouponUsage::class
    ];
}