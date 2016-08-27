<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 01:24
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contribution extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $table = 'contributions';

    protected $fillable = [
        'is_accepted',
    ];

    protected $touches = [
        'user',
    ];

    /**
     * Relates the Contribution to the User that added it.
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Gets the contributable Model for this Contribution.
     *
     * @return MorphTo
     */
    public function details()
    {
        return $this->morphTo();
    }

    /**
     * Relates the Contribution to its ContributionValue.
     *
     * @return BelongsTo
     */
    public function value()
    {
        return $this->belongsTo('App\Models\ContributionValue', 'contributable_type', 'type');
    }

    /**
     * Retrieves the value of this Contribution.
     *
     * @return integer
     */
    public function getValue()
    {
        if ($this->contributable_type === 'bonus') {
            $amount = $this->details->amount;
        } else {
            $amount = $this->value->amount;
        }

        return $amount;
    }
}
