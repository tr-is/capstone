<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Hash;
use Validator;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRegisterController extends Controller
{

    public function showRegistrationForm(Request $request){
        return view('auth.admin-register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = $this->create($request->all());
        $this->guard()->login($admin);
        return $this->registered($request, $admin)
            ?: redirect('/admin');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function guard(){
        return Auth::guard();
    }

    protected function registered(Request $request, $admin)
    {
        //
    }

}
