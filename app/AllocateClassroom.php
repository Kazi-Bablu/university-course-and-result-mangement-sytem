<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllocateClassroom extends Model
{
    //
    public function department()
    {
        return $this->hasOne('App\Departments','id','department_id');
    }
    public function course()
    {
        return $this->hasOne('App\Course','id','course_id');
    }
}
