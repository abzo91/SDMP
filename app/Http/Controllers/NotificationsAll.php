<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTrigger;
use App\Notifications\NotifyUsersMeeting;
use Illuminate\Notifications\Notifiable;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Notification;
use Illuminate\Support\Facades\DB;

class NotificationsAll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userss = User::where('role_id','=','2')->get();
        foreach($userss as $userwithrole) {
            $userwithrole->notify(new NotifyUsersMeeting());
            //$userwithrole->notify(new NotifyUsersMeeting($userwithrole));
        }
        //$users = DB::table('users')->where('role_id', 2)->get();
        //$users = Auth::user();
        //$users->notify(new NotifyUsersMeeting());
        //notify(new NotifyUsersMeeting());
        //event(new eventTrigger());
        return redirect('home');
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
    
    public function get() {
        //Notification::all();
        $usernotification = Auth::user()->unreadNotifications;
        return $usernotification;
    }

    public function read(Request $request) {
        Auth::user()->unreadNotifications()->find($request->id)->markAsRead();
        return 'success';
    }
}
