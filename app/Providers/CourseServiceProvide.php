<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CourseServiceProvide extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\services\CourseServiceInterface' , 'App\services\CourseService');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
