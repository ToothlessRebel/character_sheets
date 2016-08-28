<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 21-Aug-16
 * Time: 20:35
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Intro extends Controller
{
    public function index(Request $request)
    {
        $login = $request->input('login', 'false');

        return view('home', ['show_login' => $login]);
    }

    public function header()
    {
        return view('layout.header');
    }
}
