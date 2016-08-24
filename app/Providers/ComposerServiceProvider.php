<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 25-Aug-16
 * Time: 21:17
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Boot the Provider
     */
    public function boot()
    {
        view()->composer('layout.header', 'App\Http\ViewComposers\HeaderComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
