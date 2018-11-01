<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scoreCard;
use App\User;
use App\Points;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class scorecardQuality extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$scores = scoreCard::all();
        $users = DB::select('select * from users where role_id = "2"');
        //$scores = scoreCard::with('user_id')->get();
        $scores = DB::select('Select * from users AS U, scorecard AS S where S.user_id = U.id');
        return view('ScoreCard.scorecardQ')->with(['scores' => $scores,'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        
    }

    public function getUser($id)
    {
        //$id = $request->input('id');
        $scores = scoreCard::where('user_id', $id)->get();
        $points = Points::where('agent_id', $id)->get();
        //$scores = DB::select('Select * from users AS U, scorecard AS S where S.user_id = U.id');
        //return view('ScoreCard.scorecardU')->with(['scores' => $scores,'users' => $users]);
        return view('ScoreCard.scorecardU')->with(['scores'=> $scores, 'points'=> $points]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$score = DB::select('select * from scorecard where user_id = 2');
        $id = auth()->user()->id;
        $scores = scoreCard::where('user_id', $id)->get();
        $points = Points::where('agent_id', $id)->get();
        //$scores = DB::select('Select * from users AS U, scorecard AS S where S.user_id = U.id');
        //return view('ScoreCard.scorecardU')->with(['scores' => $scores,'users' => $users]);
        return view('ScoreCard.scorecardU')->with(['scores'=> $scores, 'points'=> $points]);

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
