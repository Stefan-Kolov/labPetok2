<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Organizer;
use App\Models\Event;
use App\Observers\OrganizerObserver;
use App\Observers\EventObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Organizer::observe(OrganizerObserver::class);
        Event::observe(EventObserver::class);
        \Illuminate\Pagination\Paginator::useBootstrap();
    }
}
