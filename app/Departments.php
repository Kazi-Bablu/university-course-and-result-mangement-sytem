<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{

    //
    public function course()
    {
        return $this->hasMany('App\Course','department_id','id');
    }
    public function  teacher()
    {
        return $this->hasMany('App\Teacher');
    }
    public function courseAssignTo()
    {
        return $this->hasMany('App\CourseAssignTo');
    }
}
