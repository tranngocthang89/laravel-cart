<?php

namespace Core\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Core\Models\Channel::class,
        \Core\Models\CoreConfig::class,
        \Core\Models\Country::class,
        \Core\Models\CountryTranslation::class,
        \Core\Models\CountryState::class,
        \Core\Models\CountryStateTranslation::class,
        \Core\Models\Currency::class,
        \Core\Models\CurrencyExchangeRate::class,
        \Core\Models\Locale::class,
        \Core\Models\Slider::class,
        \Core\Models\SubscribersList::class
    ];
}