<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 00:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SourceType extends Model
{
    public $timestamps = true;

    protected $table = 'source_types';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'id',
    ];
}
