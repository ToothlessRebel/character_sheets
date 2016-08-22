<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 21-Aug-16
 * Time: 20:35
 */

namespace App\Http\Controllers;


class Intro extends Controller
{
    public function index()
    {
        return view('home');
    }
}
