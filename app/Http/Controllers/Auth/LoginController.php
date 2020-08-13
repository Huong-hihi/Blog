<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect(route('home'));
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            var_dump($credentials);
            //return redirect('home');
        }
    }
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     $remember = $request->get('remember') == 'on' ? true : false;
    //     if (Auth::attempt($credentials, $remember)) {
    //         $enabled = Auth::user()->status;

    //         if (!$enabled) {
    //             echo "add";
    //             Auth::logout();
    //             var_dump ($credentials);
    //             return redirect(route('home'));
    //         }
    //        var_dump ($credentials);
    //        $role = Auth::user()->role;
    //         if ($role == User::ADMIN_ROLE) {
    //             return redirect(route('users.index'));
    //         } else {
    //             return redirect(route('home'));
    //        }
    //     }
    //     return redirect(route('login'));
    // }
}
