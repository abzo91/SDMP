<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Adldap\Laravel\Facades\Adldap;

class AdminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allusers = Auth::user()->all();
        return view('administrator')->with('allusers', $allusers);
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
    /*
    public function update(Request $request, $id)
    {
        //
    }
    */
    public function update(Request $request)
    {
        for( $i=0 ; $i <= count(request()['email'])-1 ; $i++ ) {
            $request->email = request('email')[$i];
            $request->role_id = request('role_id')[$i];
            $request->status = request('status')[$i];
            DB::table('users')
            ->where('email', $request->email)
            ->update(['role_id' => $request->role_id, 'status' => $request->status]);
        }
        return back();
    }

    public function autoupdate()
    {
        $allusers = Auth::user()->all();
        foreach($allusers as $users) {
            $user = Adldap::search()->where('mail', '=', $users->email)->get();
            $email = $user[0]['mail']['0'];
            $name = $user[0]['displayname']['0'];
            $ftid = $user[0]['cn']['0'];
            DB::table('users')
            ->where('email', $email)
            ->update(['name' => $name, 'ftid' => $ftid]);
        }
        return back();
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
