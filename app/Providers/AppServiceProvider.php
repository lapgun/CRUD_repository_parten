<?php

namespace App\Providers;

use App\Http\Repositories\CustomerRepositoryInterface;
use App\Http\Repositories\Impl\CustomerRepositoryImpl;
use App\Http\Service\CustomerService;
use App\Http\Service\Impl\CustomerServiceImpl;
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
        $this->app->singleton(CustomerRepositoryInterface::class,
            CustomerRepositoryImpl::class
        );
        $this->app->singleton(CustomerService::class,
            CustomerServiceImpl::class
            );
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
