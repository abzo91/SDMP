<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Misroutes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class MisroutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$misroutes = Misroutes::all();
        $misroutes = DB::select('Select * from users AS U, misroutes AS M where M.MisroutedBy = U.id and M.verified = 0');
        return view('misroutes.misroutesveri')->with('misroutes', $misroutes);
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
    public function update(Request $request)
    {
        //var_dump($request['incident'][1]);die;

        for( $i=0 ; $i <= count(request()['incident'])-1 ; $i++ ) {
             
               $request->verified = request('verified')[$i];
                $request->comments = request('comments')[$i];
                DB::table('misroutes')
                ->where('IncidentNumber', $request->incident)
                ->update(['verified' => $request->verified, 'comments' => $request->comments]);
            

            
        }
        return back(); 

        /*foreach($request as $req)
        {
            if(request('incident')) {
                var_dump(request('incident'));die;
            }
            if(!is_null(request('verified')[request('incident')]))
            {
                $req->verified = request('verified')[request('incident')];
                $req->comments = request('comments')[request('incident')];
                DB::table('misroutes')
                ->where('IncidentNumber', request('incident')[$req->incident])
                ->update(['verified' => $req->verified, 'comments' => $req->comments]);
            }
        }*/
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
