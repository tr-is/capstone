<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\User;

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

    /**
     * Return the sluggable configuration array for this model.
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

    public function users(){
        return $this->belongsToMany('App\User', 'users_jobs','user_id', 'job_id');
    }

    public function hasUser(User $user){
        return $user->jobs()->where([
                'user_id' => $user->id,
                'job_id' => $this->id
            ])->exists();
    }
}
