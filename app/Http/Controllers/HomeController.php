<?php

namespace App\Http\Controllers;

use Auth;
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

    public function jobDetail(Request $request){
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

    public function applyJob(Job $job){
        $user = Auth::user();
        try{
            $hasApplied = $user->jobs()->where([
                'user_id' => $user->id,
                'job_id' => $job->id
            ])->exists();
            if(! $hasApplied){
                $user->jobs()->attach($job->id);
            } else  {
                return redirect()->back()->with('error','Already applied.');       
            }
        }   catch(\Exception $e){
            dd($e->getMessage());
        }
        return redirect()->back()->with('success','Applied for job.');
    }

    public function listAppliedJobs(){

        $jobs = Auth::user()->jobs()->get();
        
        return view('user.jobs.appliedjob', compact('jobs'));
    }

}
