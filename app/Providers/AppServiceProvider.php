<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\User;
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
        try{
            
        $set = Setting::first(); // Use Setting Model in All Projects
        view()->share('set', $set);

        $u = User::first(); // Use User Model in All Projects
        view()->share('u', $u);

        $cate = Category::first(); // Use Category Model in All Projects
        view()->share('cate', $cate);

        } catch (\Throwable $th) {
            //throw $th;
        }

    }
}
