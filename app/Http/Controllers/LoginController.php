<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // /*
    // |--------------------------------------------------------------------------
    // | Login Controller
    // |--------------------------------------------------------------------------
    // |
    // | This controller handles authenticating users for the application and
    // | redirecting them to your home screen. The controller uses a trait
    // | to conveniently provide its functionality to your applications.
    // |
    // */
    // use AuthenticatesUsers;
    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    // public function username()
    // {
    //     return 'username';
    // }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    // /**
    //  * Handle a login request to the application.
    //  *
    //  * @param \Illuminate\Http\Request $request $request
    //  *
    //  * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
    //  */
    // public function login(Request $request)
    // {
    //     $email = $request->input('username');
    //     $password = $request->input('password');

    //     if( Auth::attempt(['email' => $email, 'password' =>$password])) {
    //         return redirect()->intended('/');
    //     } else {
    //         $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    //         return redirect()->back()->withInput()->withErrors($errors);
    //     }
    // }

    // /**
    //  * Log the user out of the application.
    //  *
    //  * @param \Illuminate\Http\Request $request $request
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     return redirect('/');
    // }
}
