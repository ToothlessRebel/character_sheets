<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publisher extends Model
{
    use SoftDeletes;

    protected $table = 'publishers';

    public $timestamps = true;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'id'
    ];

    protected $touches = [
        'games'
    ];

    /**
     * Relates the Publisher to Games.
     */
    public function games()
    {
        return $this->belongsToMany('App\Models\Game')
            ->withTimestamps()
            ->withPivot('updated_at', 'is_active');
    }

    /**
     * Relates the Publisher to its Sources.
     *
     * @return HasMany
     */
    public function sources()
    {
        return $this->hasMany('App\Models\Source');
    }
}
