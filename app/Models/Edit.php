<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 04:39
 */

namespace App\Models;


use App\Contracts\Interfaces\Contributable as ContributableInterface;
use App\Contracts\Traits\Contributable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Edit extends Model implements ContributableInterface
{
    use SoftDeletes, Contributable;

    public $table = 'edits';

    protected $timestamps = true;

    protected $fillable = [
        'attribute',
        'original',
        'new',
    ];

    protected $hidden = [
        'id',
        'target_type',
        'target_id',
    ];
}
