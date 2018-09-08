<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $jobs = Job::take(10)->get();
        return view('home', compact('jobs'));
    }

    public function update(Request $request){
        $user = Auth::user();
        if($request->getMethod() == 'POST'){
            $input = $request->input();
            $user->fill(Arr::except($input,['password', 'password_confirmation']));
            if(isset($input['password'])){
                $user->password = Hash::make($input['password']);
            }
            $user->save();
            return redirect()->back()->withInput()->with('success', 'Profile updated.');
        }   else    {
            return view('user.update', compact('user'));
        }
    }

}
