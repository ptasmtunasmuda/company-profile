<?php

namespace App\Providers;

use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Repositories\Contracts\PortfolioRepositoryInterface;
use App\Repositories\Contracts\SettingRepositoryInterface;
use App\Repositories\Contracts\TestimonialRepositoryInterface;
use App\Repositories\Eloquent\ContactRepository;
use App\Repositories\Eloquent\PortfolioRepository;
use App\Repositories\Eloquent\SettingRepository;
use App\Repositories\Eloquent\TestimonialRepository;
use App\Services\CachedSettingService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(PortfolioRepositoryInterface::class, PortfolioRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);

        // Register CachedSettingService sebagai singleton
        $this->app->singleton(CachedSettingService::class);
    }

    public function boot(): void
    {
        //
    }
}
