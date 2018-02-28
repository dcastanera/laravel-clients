<?php

namespace DCastanera\Clients;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Migrations
         * This copies the migrations for the roles and permissions tables to the
         * default database/migrations directory.
         */
        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations'),
        ]);

        /**
         * Configurations
         * This copies the configuration file used to attach a client data table.
         */
        $this->publishes([
            __DIR__.'/config' => base_path('config'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
