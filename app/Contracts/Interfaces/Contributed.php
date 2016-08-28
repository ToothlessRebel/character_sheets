<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 28-Aug-16
 * Time: 15:57
 */

namespace App\Contracts\Interfaces;


interface Contributed
{
    /**
     * Returns the ID of the contributed item.
     *
     * @return integer
     */
    public function getId();

    /**
     * Returns the properly mapped type of the contributed item.
     *
     * @return string
     */
    public function getType();
}
