<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }
}
