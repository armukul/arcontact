<?php
namespace Armukul\Arcontact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/views', 'arcontact');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config/arcontact.php' => config_path('arcontact.php')
        ]);

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/arcontact'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/arcontact.php', 'arcontact'
        );
    }
}
