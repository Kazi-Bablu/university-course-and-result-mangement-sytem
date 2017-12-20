<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseAssignTo extends Model
{
    //
    public function teacher()
    {
        return $this->hasMany('App\Teacher');
    }
    public function department()
    {
        return $this->hasMany('App\Department');
    }
    public function course()
    {
        return $this->hasOne('App\Course');
    }
}
