<?php

namespace App\Providers;

use App\Models\BlogPost;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        view::composer('*', function ($view) {
            $view->with('blogposts', BlogPost::all());
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
