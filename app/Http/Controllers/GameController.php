<?php
namespace App\Http\Controllers;
use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
class GameController extends Controller
{
  public function index ()
  {
    // GET /games
    // list all games
    $games = Game::all();
    return Response::json($games);
  }
  public function create (Request $request)
  {
    // POST /games
    // create new game
    Game::create($request->all());
    return Response::json(['created' => true]);
  }
  public function show ($id)
  {
    // GET /games/$id
    // show a single game info
    $game = Game::find($id);
    return Response::json($game);
  }
  public function update (Request $request, $id)
  {
    // PUT /games/$id
    // update a single game
    $game = Game::find($id);
    $game->update($request->all());
    return Response::json(['updated' => true]);
  }
  public function destroy ($id)
  {
    // DELETE /games/$id
    // remove a single game
    $game = Game::find($id);
    $game->delete();
    return Response::json(['deleted' => true]);
  }

  public function players($id) {
    $game = Game::find($id);
    $game->get();
    return Response::json(['players' => true'])
  }
}
