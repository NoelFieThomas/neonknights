<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|Min:5|Max:20|',
            'type'=> 'required',
            'noPlayers' => 'required'
        ],
        [
            'name.required' => 'Game Name is required. (At least 5 letters and no more than 20 letters)',
            'type.required' => 'You need to select Game type.',
            'noPlayers.required' => 'You need to select Number of players.'
        ]);

        $userId = auth()->user()->id;
        
        $test = auth()->user()->games()->create([
            'name' => $request['name'],
            'type' => $request['type'],
            'noPlayers' => $request['noPlayers'],
            'currentRound' => 1,
            'resetDay' => "Thursday",
            'invited' => array(),
            'gameMaster' => $userId,
        ])->id;

        session([
            'gameName' => $request['name'],
            'noPlayers' => $request['noPlayers'],
            'id' => $test,
        ]);

        return redirect()->route('invite.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Game::Find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function updateSize(Request $request)
    {

        $game = \App\Models\Game::FindOrFail($request['gameId']);

        if ($request['size'] >= (sizeof($game->invited) + sizeof($game->user_ids))) {
            $game->noPlayers=$request['size'];
            $game->save();
            $updateMessage = "Group size udpated to " . $game->size . " players.";
        }
        else
        {
            $updateMessage = "Group size cannot be updated. Invalid input.";
        }

        return redirect('group-management/'.$game->id.'/update-size')->with('updateMessage', $updateMessage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
