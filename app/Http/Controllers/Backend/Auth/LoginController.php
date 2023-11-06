<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::ADMIN_DASHBOARD;

    /**
     * Show Login Form
     *
     * @showLoginForm
     * @return void
     */
    public function showLoginForm()
    {
        return view('backend.auth.login');
    }

    /**
     * login submit method
     * @login
     *  Admin Guard login method
     * @return void
     */

    public function login(Request $request)
    {
        // Validate Login Data
        $request->validate([
            'email' => 'required|max:50',
            'password' => 'required',
        ]);

        // Attempt to login
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Redirect to dashboard
            session()->flash('success', 'Successully Logged in !');
            return redirect()->route('admin.dashboard');
            // return redirect()->intended(route('admin.dashboard'));
        } else {
            // Search using username
            if (Auth::guard('admin')->attempt(['username' => $request->email, 'password' => $request->password], $request->remember)) {
                session()->flash('success', 'Successully Logged in !');
                return redirect()->intended(route('admin.dashboard'));
            }
            // error
            session()->flash('error', 'Invalid email and password');
            return back();
        }
    }


    /**
     *
     * // Admin Guard logout method
     */

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
