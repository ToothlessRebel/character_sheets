<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 18:05
 */

namespace App;


class Gravatar
{
    /** @var string $email */
    private $email;

    /** @var string $hash */
    private $hash;

    public function __construct($email)
    {
        $this->email = strtolower(trim($email));
        $this->hash = md5($this->email);
    }

    public function link($size = 'medium')
    {
        $base_url = config('gravatar.urls.avatar');
        $size = config("gravatar.sizes.{$size}", config('gravatar.sizes.medium'));

        return "{$base_url}{$this->hash}?size={$size}&default=monsterid";
    }
}
