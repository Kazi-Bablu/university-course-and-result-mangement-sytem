<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrollCourses extends Model
{
    public function student()
    {
        return $this->hasOne('App\Student','id','reg_id');
    }
    public function department()
    {
        return $this->hasOne('App\Departments','id','department_id');
    }
    public function course()
    {
        return $this->hasOne('App\Course','id','department_id');
    }
    public function course_name()
    {
        return $this->belongsTo('App\Course','course_id','id');
    }
}
