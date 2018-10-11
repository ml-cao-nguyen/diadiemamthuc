<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Model\User;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param \Illuminate\Http\Request $request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        if( Auth::attempt(['username' => $username, 'password' =>$password])) {
            return redirect()->intended('/');
        } else {
            $errors = ['errorlogin' => 'Email hoặc mật khẩu không đúng'];
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    /**
     * Handle a login request to the application.
     *
     * @param \Illuminate\Http\Request $request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Retrieve all request data including username, email & password.
        // I assume that the data IS validated.
        $input = $request->all();

        // Hash the password
        $input['password'] = bcrypt($input['password']);

        // Create the user
        User::create($input);
        return redirect()
        // To the route named `login`
        ->route('login')

        // And flash the request data into the session,
        // if you flash the `$input` into the session, you'll
        // get a "Failure" message again. That's because the 
        // password in the $input array is already hashed and 
        // the attempt() method requires user's password, not 
        // the hashed copy of it. 
        //
        ->with($request->only('username', 'password'));
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
