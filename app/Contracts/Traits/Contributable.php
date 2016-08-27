<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 16:22
 */

namespace App\Contracts\Traits;


use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

trait Contributable
{
    protected $touches = [
        'contribution',
    ];

    /**
     * Relates the Contributable to its Contribution.
     *
     * @return MorphMany
     */
    public function contribution()
    {
        return $this->morphMany('App\Models\Contribution', 'contributable');
    }

    /**
     * Relates the Contributable to its target.
     *
     * @return MorphTo
     */
    public function target()
    {
        return $this->morphTo();
    }
}
