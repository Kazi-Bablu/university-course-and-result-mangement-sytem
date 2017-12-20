<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{

    protected  $table = 'departments';

  /*  public function course()
    {
        return $this->hasMany('App\Course','department_id');
    }*/

    public function courseAssignTo()
    {
        return $this->hasMany('App\CourseAssignTo');
    }
}
