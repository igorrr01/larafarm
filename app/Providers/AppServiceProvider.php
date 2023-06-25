<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Settings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
			// Admin Settings
			 $settings = Settings::first();
			 View()->share('settings', $settings);
		} catch (\Exception $exception) {
			// Nothing
		}
    }
}
