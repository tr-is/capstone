<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

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
}
