<?php

namespace App\Providers;

//use App\Services\Twitter;
use Encore\Admin\Config\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Config::load();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->singleton('foo',function (){
//            return 'bar';
//        });

//        $this->app->singleton(Twitter::class,function (){
//            return new Twitter('api-key');
//        });

        $this->app->bind(
            \App\Repositories\UserRepository::class,
            \App\Repositories\DbUserRepository::class
        );
    }
}
