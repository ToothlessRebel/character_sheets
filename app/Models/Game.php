<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use SoftDeletes;

    protected $table = 'games';

    public $timestamps = true;

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'id',
    ];

    protected $touches = [
        'publishers',
    ];

    /**
     * Relates the Game to Publishers.
     *
     * @return BelongsToMany
     */
    public function publishers()
    {
        return $this->belongsToMany('App\Models\Publisher')
            ->withTimestamps()
            ->withPivot('updated_at', 'is_active');
    }

    /**
     * Relates the Game to Sources.
     *
     * @return BelongsToMany
     */
    public function sources()
    {
        return $this->belongsToMany('App\Models\Sources')
            ->withTimestamps()
            ->withPivot('updated_at');
    }
}
