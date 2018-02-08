<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseAssignTo extends Model
{
    //
    public function teacher()
    {
        return $this->hasOne('App\Teacher','id','teacher');
    }
    public function department()
    {
        return $this->hasOne('App\Department','id','department_id');
    }
    public function course()
    {
        return $this->hasMany('App\Course','id','course');
    }
}
