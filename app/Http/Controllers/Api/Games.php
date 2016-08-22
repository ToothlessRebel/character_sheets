<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 21-Aug-16
 * Time: 23:28
 */

namespace App\Http\Controllers\Api;

use App\Models\Game;

class Games
{
    public function index()
    {
        $games = Game::all(['id', 'name'])->toArray();

        return response()->json($games);
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function show()
    {
        // TODO: Implement show() method.
    }
}
