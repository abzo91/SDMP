<?php

namespace App\Http\Controllers\Auth;

use Adldap\Laravel\Facades\Adldap;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
     */

    use SendsPasswordResetEmails;

    protected function checkmailexists(Request $request)
    {
        $search = Adldap::search()->where('mail', '=', $request->input('email'))->get();
        if (count($search) == 0) {
            $status = session()->flash('status', 'The email provided was not found in the Active directory.');
            return view('auth.passwords.email')->with('status', $status);
        } else {
            $aduser = $search[0]['mail']['0'];
            $usernorm = User::where('email', '=', $request->input('email'))->first();
            if ($usernorm['email'] == $request->input('email')) {
                $this->validateEmail($request);
                $response = $this->broker()->sendResetLink(
                    $request->only('email')
                );

                $status = session()->flash('status', 'Password reset sent successfully. Please check your email and activate your account.');
                return view('auth.passwords.email')->with('status', $status);
            } elseif (strtolower($request->input('email')) == $aduser) {
                $validatedData = $request->validate([
                    'email' => 'required|string|email|max:255|regex:/(.*)@orange\.com/i|unique:users',
                ]);
                $name = $search[0]['displayname']['0'];
                $ftid = $search[0]['cn']['0'];
                $imagelocation = "noimage.jpg";
                try {
                    $validatedData['name'] = $name;
                    $validatedData['ftid'] = $ftid;
                    $validatedData['password'] = str_random(30);
                    $validatedData['email'] = strtolower($validatedData['email']);
                    $validatedData['imagelocation'] = $imagelocation;
                    $user = app(User::class)->create($validatedData);
                    $this->validateEmail($request);
                    $response = $this->broker()->sendResetLink(
                        $request->only('email')
                    );

                } catch (\Exception $exception) {
                    logger()->error($exception);
                    $status = session()->flash('status', 'Unable to create new user.');
                    return view('auth.passwords.email')->with('status', $status);
                }
                //$user->notify(new UserRegisteredSuccessfully($user));
                $status = session()->flash('status', 'Successfully created a new account. Please check your email and activate your account.');
                return view('auth.passwords.email')->with('status', $status);
            } else {
                $status = session()->flash('status', 'Unexpected error, please contact your the application administrator');
                return view('auth.passwords.email')->with('status', $status);
            }
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /*
public function sendPasswordResetNotification($token)
{
$user->notify(new UserRegisteredSuccessfully($token));
}
 */
}

//LDAP Auth
/* public function login(Request $request){
$AttLogin = Adldap::auth()->attempt($request->username, $request->password);
if ($AttLogin) {
$users = $AttLogin->search()->where('cn', '=', 'WBDM4097')->get();
return var_dump($users); } else { return 'fail';
}
} */
/* public function login(Request $request) {
$provider = Adldap::getDefaultProvider();
$provider->auth()->bind($request->username, $request->password);
if ($provider->auth()->attempt($request->username, $request->password, true)) {
$users = $provider->search()->where('cn', '=', 'WBDM4097')->get();
return $users[0]['displayname']['0'];
}
else {
return 'fail';
}
} */
