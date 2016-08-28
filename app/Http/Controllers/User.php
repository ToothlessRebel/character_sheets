<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 27-Aug-16
 * Time: 23:01
 */

namespace App\Http\Controllers;


use App\Models\User as UserModel;

class User extends Controller
{
    public function show($username)
    {
        /** @var UserModel $user */
        $user = UserModel::whereRaw('LOWER(username) = ?', [$username])->first();

        if (!$user) {
            abort(404);
        }

        return view('user.profile', ['user' => $user]);
    }
}
