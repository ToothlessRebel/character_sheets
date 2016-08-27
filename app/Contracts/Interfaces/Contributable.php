<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 16:23
 */

namespace App\Contracts\Interfaces;


use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

interface Contributable
{
    /**
     * @return MorphTo
     */
    public function target();

    /**
     * @return MorphMany
     */
    public function contribution();

    /**
     * @return MorphMany
     */
    public function morphMany();

    /**
     * @return MorphTo
     */
    public function morphTo();
}
