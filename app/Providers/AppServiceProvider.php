<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Patient;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // Change format date for application
        Carbon::setLocale('id');


        // Notification section
        View::composer('*', function ($view) {
            $pendingPatientCount = Patient::where('is_accepted', 0)->count();
            $view->with('pendingPatientCount', $pendingPatientCount);
        });
    }
}
