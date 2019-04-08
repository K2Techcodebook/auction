<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\user_profiles;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
        /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    //
    protected function createAffiliate(Request $request)
    {
           $this->validate($request, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'country' => ['required', 'string'],
            'state' => ['required', 'string'],

        ]);

    //    user_profiles::create([
    //              'user_id' => $user_id,
    //              'email' => $request['email'],
    //               'phone_number' => 0,
    //               'full_name' =>0,
    //               'address' => 0,
    //               'gender' =>0,
    //         ]);


          User::create([
                //   'user_id' => $user_id,
                   'username' => $request['username'],
                   'email' => $request['email'],
                   'first_name' => $request['first_name'],
                   'last_name' => $request['last_name'],
                    'ip_address' =>  request()->ip(),
                   'password' => Hash::make($request['password']),
                   'country'  => $request['country'],
                   'state' => $request['state'],
                   'is_permission'  => 0,
                   'token_balance' =>  0,
               
               ]);

               
             return redirect()->intended('login');


    }
}
