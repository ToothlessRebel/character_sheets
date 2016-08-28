<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 22-Aug-16
 * Time: 00:37
 */

namespace App\Guards;


use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;

class HeaderTokenGuard implements Guard
{
    use GuardHelpers;

    /** @var Request $request */
    private $request;
    private $storage_key;

    /**
     * Create a new authentication guard.
     *
     * @param  \Illuminate\Contracts\Auth\UserProvider  $provider
     * @param  \Illuminate\Http\Request  $request
     */
    public function __construct(UserProvider $provider, Request $request)
    {
        $this->request = $request;
        $this->provider = $provider;
        $this->storage_key = 'api_token';
    }

    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function user()
    {
        if (is_null($this->user)) {
            $this->user = $this->provider->retrieveByCredentials(
                [$this->storage_key => $this->request->header('api-key')]
            );
        }

        return $this->user;
    }

    /**
     * Validate a user's credentials.
     *
     * @param  array $credentials
     *
     * @return bool
     */
    public function validate(array $credentials = [])
    {
        $valid = false;

        $credentials = [$this->storage_key => $credentials[$this->storage_key] ?: $this->request->header('api-key')];

        if ($this->provider->retrieveByCredentials($credentials)) {
            $valid = true;
        }

        return $valid;
    }}
