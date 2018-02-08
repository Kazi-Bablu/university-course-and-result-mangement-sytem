<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaveStudentResult extends Model
{
    //
    public function course()
    {
        return $this->belongsTo('App\Course','course_id','id');
    }
}
