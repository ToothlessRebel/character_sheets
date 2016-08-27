<?php

namespace App\Providers;

use App\Models\Contribution;
use App\Models\User;
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
        User::creating(function (User $user) {
            $user->api_token = md5($user->email . str_random(30));
        });

        Contribution::saving(function (Contribution $contribution) {
            if ($contribution->isDirty('is_accepted')) {
                if ($contribution->is_accepted) {
                    $contribution->user->increment('reputation', $contribution->getValue());
                } else {
                    $contribution->user->decrement('reputation', $contribution->getValue());
                }
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
