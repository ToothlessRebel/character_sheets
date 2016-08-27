<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 16:46
 */

namespace App\Models;


use App\Contracts\Interfaces\Contributable as ContributableInterface;
use App\Contracts\Traits\Contributable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bonus extends Model implements ContributableInterface
{
    use SoftDeletes, Contributable;

    public $timestamps = true;

    protected $fillable = [
        'reason',
        'amount',
    ];
}
