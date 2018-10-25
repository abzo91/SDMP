<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CallObservation;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CallObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::all();
        $users = DB::select('select * from users where role_id = "2"');
        return view('call_observation.co_creation')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $date_observed = date("d-M-Y");
        $observer_id = Auth::user()->id;
        $validatedData = $request->validate([
            'Title' => 'required',
            'Agent_Name' => 'required',
            'Silence' => 'required',
            'Plazza_Marketing' => 'required',
            'Technical_Skills' => 'required',
            'Shift_Style' => 'required',
            'Ticket_Number_Provided' => 'required',
            'greetings1' => 'required',
            'greetings2' => 'required',
            'greetings3' => 'required',
            'Tone_of_Voice' => 'required',
            'Attitude' => 'required',
            'Hold' => 'required',
            'Thanked_for_Holding' => 'required',
            'Comments' => 'required',
        ]);
            if(empty($validatedData)) {
                if($validatedData->fails()) {
                    return Redirect::back()->withErrors($validatedData);
                }
            }
        
        $co_obs = new CallObservation;
        $co_obs->title = request('Title');
        $co_obs->observer_id = $observer_id;
        $co_obs->observed_agent_id = request('Agent_Name');
        $co_obs->silenceradio = request('Silence');
        $co_obs->plazzaradio = request('Plazza_Marketing');
        $co_obs->techskills = request('Technical_Skills');
        $co_obs->shiftradio = request('Shift_Style');
        $co_obs->ticketradio = request('Ticket_Number_Provided');
        $co_obs->greetings1 = request('greetings1');
        $co_obs->greetings2 = request('greetings2');
        $co_obs->greetings3 = request('greetings3');
        $co_obs->toneradio = request('Tone_of_Voice');
        $co_obs->attituderadio = request('Attitude');
        $co_obs->holdradio = request('Hold');
        $co_obs->thankedradio = request('Thanked_for_Holding');
        $co_obs->comments = request('Comments');
        $co_obs->date_observed = $date_observed;
        $co_obs->save();
        return Redirect::back()->with('message', 'Created successfully');
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
    public function show($id)
    {
        //
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
