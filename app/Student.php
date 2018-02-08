<?php

namespace App;
use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{


    public function department()
    {

        return $this->hasOne('App\Departments','id','department_id');
    }
  /*  public function searchableAs()
    {
        $orders = App\Order::search('name')
            ->within('tv_shows_popularity_desc')
            ->get();
        return 'Admin/students/index';
    }*/
  public function course()
  {
      return $this->hasMany('App\Course','id','course_id');
  }



}
