<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 25-Aug-16
 * Time: 21:17
 */

namespace App\Providers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Boot the Provider
     */
    public function boot()
    {
        view()->composer('*', function (View $view) {
            $view->with('current_user', Auth::user());
        });
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
