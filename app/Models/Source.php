<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 00:30
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Source extends Model
{
    public $timestamps = true;

    protected $table = 'sources';

    protected $fillable = [
        'name',
        'published_at',
    ];

    protected $hidden = [
        'id',
    ];

    protected $touches = [
        'games',
    ];

    /**
     * Relates the Source to its SourceType.
     *
     * @return BelongsTo
     */
    public function type()
    {
        return $this->belongsTo('App\Models\SourceType');
    }

    /**
     * Relates the Source to its Game.
     *
     * @return BelongsTo
     */
    public function game()
    {
        return $this->belongsTo('App\Models\Game');
    }

    /**
     * Relates the Source to its Publisher
     *
     * @return BelongsTo
     */
    public function publisher()
    {
        return $this->belongsTo('App\Models\Publisher');
    }
}
