<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class Job extends Model
{
    use SoftDeletes, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'type',
        'description',
        'salary',
        'salary_negotiable',
        'deadline',
        'preferred_gender',
        'specification',
        'education_description',
        'experience',
        'job_location',
        'education',
        'salary_range',
        'skills_required',
        'status',
        'created_by'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $appends = ['match'];

    /**
     * Return the sluggable configuration array ford this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getMatchAttribute(){
        $user = Auth::user();
        if ($user instanceof User) {

            $categories = $this->job_location
                . " "
                . $this->specification
                . " "
                . $this->education_description
                . " "
                . $this->title
                . " "
                . $this->description
                . " "
                . $this->education_description
                . " "
                . $this->type
                . " "
                . $this->salary_range;
            $categories = strtolower(str_replace(',', ' ', strip_tags($categories)));

            $scriptPath = public_path('/matching.py');
            $userCategories = $user->categories . " " . $user->address . " " . $user->skills . " " . $user->education . " " . $user->expected_salary . " " . $user->experience . " " . $user->field_of_experience . " " . $user->preferred_location;
            $userCategories = strtolower(str_replace(',', ' ', strip_tags($userCategories)));
            $command = escapeshellcmd("/usr/bin/python {$scriptPath} '{$categories}' '{$userCategories}'");
            $match = round(doubleval(shell_exec($command)) * 100, 2);
            return $match;
        }
        return false;
    }

    public function users(){
        return $this->belongsToMany('App\User', 'users_jobs','user_id', 'job_id');
    }

     public function admin(){
        return $this->belongsTo('App\Admin','created_by');
    }

    public function hasUser(User $user ){
        
            return $user->jobs()->where([
                'user_id' => $user->id,
                'job_id' => $this->id
            ])->exists();
    }
}
