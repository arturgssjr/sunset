<?php

namespace Descolado\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = [
            'EventRepository',
            'SubscribeRepository'
        ];

        foreach ($repositories as $repository) {
            $this->app->bind(
                "Descolado\Interfaces\Repositories\\{$repository}Interface",
                "Descolado\Repositories\\{$repository}"
            );
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
