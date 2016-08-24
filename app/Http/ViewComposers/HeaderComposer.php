<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 25-Aug-16
 * Time: 21:38
 */

namespace App\Http\ViewComposers;


use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view)
    {
        $view->with('user', Auth::user());
    }
}
