<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index(Request $request){
        $query = trim($request->query('query'));
        if(!empty($query)){
            $jobs = Job::where('title','like',"%{$query}%")->take(10)->get();
        }   else    {
            $jobs = Job::take(10)->get();
        }
        return view('welcome', compact('jobs'));
    }

    public function jobDetail($slug){
        $slug = Route::current()->parameter('slug');
        $job = Job::where(['slug' => $slug])->get()->first();
        if(! $job instanceof Job){
            return redirect()->route('home');
        }
        return view('job-detail',compact('job'));
    }

public function userDetail(User $user){
        return view('user-detail', compact('user'));
    }
}
