<?php

namespace App\Http\Controllers;

use Auth;
use App\Job;
use App\User;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index(Request $request){
        $query = trim($request->query('query'));
        $admins = Admin::all();
        if(!empty($query)){
            $jobs = Job::with('admin')->where('title','like',"%{$query}%")->take(10)->get();

        }   else    {
            $jobs = Job::with('admin')->take(200)->get();
        }

        return view('welcome')->withJobs($jobs)->withAdmins($admins);
    }

    public function jobDetail(Request $request){
        $slug = Route::current()->parameter('slug');
        $job = Job::where(['slug' => $slug])->get()->first();
        if(! $job instanceof Job){
            return redirect()->route('home');
        }

        $user = Auth::user();
        $categories = $job->job_location ." ".$job->specification ." ".$job->education_description ." ".$job->title ." ". $job->description . " ". $job->education_description ." ". $job->type . " ". $job->salary_range;
        $categories = strtolower(str_replace(',',' ', strip_tags($categories)));
        $match = null;
        if($user instanceof User){
            $scriptPath = public_path('/matching.py');
            $userCategories =  $user->categories." ". $user->address . " ". $user->skills . " ". $user->education . " ". $user->expected_salary ." ". $user->experience. " ". $user->field_of_experience. " ". $user->preferred_location;
            $userCategories = strtolower(str_replace(',',' ', strip_tags($userCategories)));
            $command = escapeshellcmd("/usr/bin/python {$scriptPath} '{$categories}' '{$userCategories}'");
            $match = round(doubleval(shell_exec($command)) * 100,2);
        }

        return view('job-detail',compact('job','match'));
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

    public function about(){
      return view('about');
    }

}
