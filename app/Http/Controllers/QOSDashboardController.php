<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\QOSDashboard;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class QOSDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users where role_id = "2"');
        return view('qos_dashboard.qosdashboard_creation')->with(compact('users'));
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
        $date_of_creation = date("d-M-Y");
        $created_by_id = Auth::user()->id;
        $validatedData = $request->validate([
            'Category' => 'required',
            'Title' => 'required',
            'Agent_Name' => 'required',
            'Comments' => 'required',
        ]);
            if(empty($validatedData)) {
                if($validatedData->fails()) {
                    return Redirect::back()->withErrors($validatedData);
                }
            }
        
        $qos_dash = new QOSDashboard;
        $qos_dash->created_by_id = $created_by_id;
        $qos_dash->category = request('Category');
        $qos_dash->title = request('Title');
        $qos_dash->agent_id = request('Agent_Name');
        $qos_dash->comments = request('Comments');
        $qos_dash->date_of_creation = $date_of_creation;
        $qos_dash->save();
        return Redirect::back()->with('message', 'Created successfully');
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
