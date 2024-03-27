<?php

namespace FerProjekt\LaravelUserable;

use Illuminate\Support\ServiceProvider;

class LaravelUserableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../database/migrations/add_userable_morphs_to_users_table.php.stub' => database_path('migrations/' . date('Y_m_d_his', time()) . '_add_userable_morphs_to_users_table.php')
            ], 'laravel-userable-migrations');
        }
    }
}
