<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 28-Aug-16
 * Time: 15:47
 */

namespace App\Contracts\Traits;


use App\Contracts\Interfaces\Contributed;
use App\Models\Addition;
use App\Models\Contribution;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait Contributes
{
    /**
     * Retrieves the authenticated User.
     *
     * @return User
     */
    protected function getUser()
    {
        return Auth::guard('api')->user();
    }

    protected function add(Contributed $contribution)
    {
        // TODO There must be a better method of handling the polymorphic relationships.
        /** @var Addition $addition */
        $addition = Addition::create([
            'target_type' => $contribution->getType(),
            'target_id'   => $contribution->getId(),
        ]);

        Contribution::create([
            'user_id'            => $this->getUser()->id,
            'contributable_type' => 'addition',
            'contributable_id'   => $addition->id,
        ]);
    }

    protected function edit()
    {

    }

    protected function bonus()
    {

    }
}
