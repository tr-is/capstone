<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Validation\ValidationException;
use Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth:admin', ['except' => ['logout','login']]);
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->get('email'), 'password' => $request->get('password')], $request->get('remember'))) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.home'));
        }
        return $this->sendFailedLoginResponse($request);
        // if unsuccessful, then redirect back to the login with the form data
//        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors('email','Invalid email/password combination.');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/employer/login');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

}