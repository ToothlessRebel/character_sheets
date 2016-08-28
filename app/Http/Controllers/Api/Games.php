<?php
/**
 * Created by PhpStorm.
 * User: ToothlessRebel
 * Date: 21-Aug-16
 * Time: 23:28
 */

namespace App\Http\Controllers\Api;

use App\Contracts\Traits\Contributes;
use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Games extends Controller
{
    use Contributes;

    /**
     * Returns a JSON list of all available Games.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $games = Game::all(['id', 'name'])->toArray();

        return response()->json($games);
    }

    /**
     * Adds a new Game to the repository.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        /** @var Publisher $publisher */
        try {
            $publisher = Publisher::findOrFail($request->input('publisher'));
        } catch (ModelNotFoundException $exception) {
            $publisher = Publisher::find(1);
        }

        /** @var Game $game */
        $game = Game::create([
            'name' => $request->input('name'),
        ]);

        $game->publishers()->attach($publisher->id, ['is_active' => true]);

        $this->add($game);

        return response()->json([
            'status' => true,
            'game'   => $game,
        ]);
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
