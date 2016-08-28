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
     * @param      $related
     * @param      $name
     * @param null $type
     * @param null $id
     * @param null $localKey
     *
     * @return MorphMany
     */
    public function morphMany($related, $name, $type = null, $id = null, $localKey = null);

    /**
     * @param null $name
     * @param null $type
     * @param null $id
     *
     * @return MorphTo
     */
    public function morphTo($name = null, $type = null, $id = null);
}
