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
    protected $redirectTo = '/home';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
         $this->middleware('guest:bloodcenter')->except('logout5');
    }

     public function showBloodcenterLoginForm()
    {
        return view('auth.login', ['url' => 'bloodcenter']);
    }
     public function BloodcenterLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'phoneno' => 'required|min:6'
        ]);

        if (Auth::guard('bloodcenter')->attempt(['email' => $request->email, 'phoneno' => $request->password])) {

            return redirect()->intended('/bloodcenter');
        }
        return back()->withInput($request->only('email'));
    }

}
