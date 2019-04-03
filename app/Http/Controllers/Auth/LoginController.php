<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
    use Illuminate\Http\Request;
    use Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function affiliateLogin(Request $request)
    {
        $this->validate($request, [
               'username' => ['required', 'string', 'max:255'],
              'password' => ['required', 'string', 'min:6']
        ]);

        if (Auth::guard('users')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {

           return redirect()->intended(route('dashboard'));
        }
         $message ='Login Details Incorrect Plsease Check Again!';
        return back()->withInput($request->only('aemail', 'remember'))->with('status', $message);
    }

        public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }

}
