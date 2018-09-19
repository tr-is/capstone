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
        return view('home', compact('jobs','matchs'));
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

    /**
     * @param $jobs
     * @param $user
     * @param $matchs
     * @return array
     */
    public function matchJobsPercentage($jobs, $user)
    {
        $matchs = [];
        foreach ($jobs as $job) {
            $categories = $job->job_location . " " . $job->specification . " " . $job->education_description . " " . $job->title . " " . $job->description . " " . $job->education_description . " " . $job->type . " " . $job->salary_range;
            $categories = strtolower(str_replace(',', ' ', strip_tags($categories)));

            if ($user instanceof User) {
                $scriptPath = public_path('/matching.py');
                $userCategories = $user->categories . " " . $user->address . " " . $user->skills . " " . $user->education . " " . $user->expected_salary . " " . $user->experience . " " . $user->field_of_experience . " " . $user->preferred_location;
                $userCategories = strtolower(str_replace(',', ' ', strip_tags($userCategories)));
                $command = escapeshellcmd("/usr/bin/python {$scriptPath} '{$categories}' '{$userCategories}'");
                $matchs[] = round(doubleval(shell_exec($command)) * 100, 2);
            }
        }
        return $matchs;
    }

}
