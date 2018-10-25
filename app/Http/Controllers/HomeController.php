<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $mail = $request->input('email');
        $data = [
            'email' => $email,
            'ftid' => $ftid,
            'name' => $name,
        ];
        $email = User::where('email', $mail)->first();
        return View::make('home')
            ->with($data);
        */
        $users = DB::select('select * from users where role_id = "2"');
        if (Auth::user()->role_id == 1)
        {
            return view('qoshome')->with(compact('users'));
        } else {
            return view('home')->with(compact('users'));
        }
    }
}
