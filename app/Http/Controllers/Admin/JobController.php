<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

class JobController extends AdminController
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function listJobs(Request $request)
    {
        $userId = Auth::user()->id;
        $filters = $request->query->all();
        $filters['created_by'] = $userId;
        $limit = isset($filters['limit']) && is_numeric($filters['numeric']) ? $filters['limit'] : 20;
        $data['jobs'] = Job::where($filters)->paginate($limit);
        return view('admin.jobs.list', $data);
    }

    public function create(Request $request)
    {
        $id = Route::current()->parameter('id');

        $model = null;
        if ($id) {
            $job = Job::findOrFail($id);
            if ($job instanceof Job) {
                $model = $job;
            }
        }

        if ($request->getMethod() == 'POST') {
            $this->validate($request, [
                'title' => 'required|min:6|max:255',
                'description' => 'required|min:6',
                'salary' => 'required',
                'deadline' => 'nullable|date',
                'salary_negotiable' => 'boolean'
            ]);
            try {
                $data = $request->all();
                $data['created_by'] = Auth::user()->id;

                if ($model instanceof Job) {
                    $model->update($data);
                } else {
                    Job::create($data);
                }

                return redirect()->route('admin.job.list');
            } catch (\Throwable $e) {
                throw new \Exception($e->getMessage());
            }
        }
        return view('admin.jobs.create', compact('model'));
    }

    public function delete($id)
    {
        $job = Job::findOrFail($id);
        if ($job instanceof Job) {
            try {
                $job->delete();
                return redirect()->back()->with('errors', 'Job deleted.');
            } catch (\Throwable $e) {
                return redirect()->back()->with('errors', $e->getMessage());
            }
        }
    }

    public function matchJob(Job $job)
    {
        $categories = $job->title;
        $categories = strtolower(str_replace(',',' ', $categories));
        $users = User::all();
        $results = [];
        foreach ($users as $user){
            $scriptPath = public_path('/matching.py');
            $userCategories = strtolower(str_replace(',',' ', $user->categories));;
            $command = escapeshellcmd("/usr/bin/python {$scriptPath} '{$categories}' '{$userCategories}'");
            $results[] = [
                'user' => $user,
                'output' => doubleval(shell_exec($command))
            ];
        }
        arsort($results);
        return view('admin.jobs.matchJobs', compact('results','job'));
    }

}
