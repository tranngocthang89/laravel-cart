<?php

namespace CatalogRule\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Event;
use CatalogRule\Console\Commands\PriceRuleIndex;

class CatalogRuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        Event::listen('catalog.product.update.after', 'CatalogRule\Listeners\Product@createProductRuleIndex');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    /**
     * Register the console commands of this package
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole())
            $this->commands([PriceRuleIndex::class]);
    }
}