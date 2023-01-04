<?php

namespace App\Providers;

use App\Repositories\Interfaces\TenderRepositoryInterface;
use App\Repositories\TenderRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TenderRepositoryInterface::class, TenderRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
