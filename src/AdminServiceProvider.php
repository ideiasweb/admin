<?php

namespace Ideiasweb\Admin;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/Resources/Migrations');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->loadViewsFrom(__DIR__ . '/Resources/Views', 'admin');

        $this->publishes([__DIR__ . '/config.php' => config_path('admin.php')], 'ideiasweb/admin~config');
        $this->publishes([__DIR__ . '/Resources/Views' => resource_path('views/vendor/admin')], 'ideiasweb/admin~views');
        $this->publishes([__DIR__ . '/Resources/Assets' => resource_path('assets/vendor/admin')], 'ideiasweb/admin~assets');
        $this->publishes([__DIR__ . '/Resources/Migrations' => database_path('migrations')], 'ideiasweb/admin~migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig(__DIR__ . '/auth.php', 'auth');

        $this->app->singleton('Ideiasweb.Admin.Helper', function () {
            return new AdminHelper;
        });
    }

    /**
     * Merge the given configuration with the existing configuration.
     *
     * @param $path
     * @param $key
     */
    protected function mergeConfig($path, $key)
    {
        $config = $this->app['config']->get($key, []);

        $this->app['config']->set($key, array_merge_recursive(require $path, $config));
    }
}
