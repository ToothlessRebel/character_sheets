<?php

namespace App\Models;

use App\Contracts\Interfaces\Contributed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model implements Contributed
{
    use SoftDeletes;

    public $timestamps = true;

    protected $table = 'games';

    protected $type = 'game';

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

    /**
     * Returns the ID of the contributed item.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the properly mapped type of the contributed item.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
