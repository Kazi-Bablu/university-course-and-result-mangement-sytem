<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function department()
    {
        return $this->hasTo('App\Department');
    }
    public function course()
    {
        return $this->hasOne('App\Course');
    }
}
