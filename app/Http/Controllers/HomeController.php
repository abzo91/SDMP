<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\ITHDStars;
use App\User;

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
        
        $ithd_stars_one = ITHDStars::select('agent_id')->where('starnumber', '1')->orderBy('last_updated', 'DESC')->get();
        $ithd_stars_two = ITHDStars::select('agent_id')->where('starnumber', '2')->orderBy('last_updated', 'DESC')->get();
        $ithd_stars_three = ITHDStars::select('agent_id')->where('starnumber', '3')->orderBy('last_updated', 'DESC')->get();
        $ithd_stars_one_agent = DB::select('select name, imagelocation from users where id = '.$ithd_stars_one[0]['agent_id']);
        $ithd_stars_two_agent = DB::select('select name, imagelocation from users where id = '.$ithd_stars_two[0]['agent_id']);
        $ithd_stars_three_agent = DB::select('select name, imagelocation from users where id = '.$ithd_stars_three[0]['agent_id']);
        $ithdData = array($ithd_stars_one_agent, $ithd_stars_two_agent, $ithd_stars_three_agent);

        $users = DB::select('select * from users where role_id = "2"');
        if (Auth::user()->role_id == 1)
        {
            return view('qoshome')->with(compact('users'))->with(compact('ithdData'));
        } else {
            return view('home')->with(compact('users'));
        }
    }
}
