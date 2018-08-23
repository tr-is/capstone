<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::take(10)->get();
        return view('home', compact('jobs'));
    }

    public function jobDetail($id){
        $job = Job::findOrFail($id);
        if(! $job instanceof Job){
            return redirect()->route('home');
        }
        return view('user.job-detail',compact('job'));
    }
}
