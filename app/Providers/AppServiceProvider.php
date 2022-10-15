<?php

namespace App\Providers;

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
        // App::singleton('app\Billing\Stripe', function()
        // {
        //     return new \App\Billing|stripe(config('services.stripe.secret'));
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.archives', function($view){

            $archives = \App\Models\Post::archives();
            $tags = \App\Models\Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));


        });
    }

}
