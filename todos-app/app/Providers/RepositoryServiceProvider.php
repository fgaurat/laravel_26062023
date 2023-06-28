<?php

namespace App\Providers;

use App\Interfaces\RepositoryInterface;
use App\Repositories\TodoListRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(RepositoryInterface::class,TodoListRepository::class);
    }
}
