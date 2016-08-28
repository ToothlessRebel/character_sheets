<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'users';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'api_token',
    ];

    /**
     * Relates the User to its Contributions.
     *
     * @return HasMany
     */
    public function contributions()
    {
        return $this->hasMany('App\Models\Contribution');
    }

    /**
     * Retrieves the URL for the Gravatar image at the given size.
     *
     * @param string $size
     *
     * @return string
     */
    public function gravatar($size = 'medium')
    {
        return App::make('App\Gravatar', [$this->email])->link($size);
    }
}
