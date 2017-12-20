<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table ='courses';

    public function department()
    {
        return $this->hasOne('App\Departments','id','department_id');
    }
    public function courseAssignTo()
    {
        return $this->hasOne('App\CourseAssignTO');
    }
}
