<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 01:08
 */

namespace App\Providers;


use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class RelationProvider extends ServiceProvider
{
    public function boot()
    {
        Relation::morphMap([
            'edit'     => 'App\Models\Edit',
            'addition' => 'App\Models\Addition',
            'bonus'    => 'App\Models\Bonus',
            'game'     => 'App\Models\Game',
        ]);
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
