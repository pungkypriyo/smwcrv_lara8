<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $inVal = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array( 'username' => $inVal['username'], 'password' => $inVal['password']))){
            $userdata = User::where('username',$inVal['username'])->first();
            session([
                'userId' => Crypt::encrypt($userdata->id),
                'userRoles' => $userdata->user_role,
                'userEmail' => $userdata->email,
            ]);
            if (auth()->user()->user_role == 1) {
                return redirect()->route('admin.route');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                                ->with('error','Username & password tidak tepat. Mohon ulangi kembali.');
        }

    }
}
