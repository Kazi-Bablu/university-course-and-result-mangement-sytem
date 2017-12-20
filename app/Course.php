<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    public function departments()
    {
        return $this->belongsTo('App\Departments','department_id');
    }
    public function courseAssignTo()
    {
        return $this->hasOne('App\CourseAssignTO');
    }
}
