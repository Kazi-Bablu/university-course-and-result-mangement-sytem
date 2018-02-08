<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function department()
    {
        return $this->hasOne('App\Departments','id','department_id');
    }


}
