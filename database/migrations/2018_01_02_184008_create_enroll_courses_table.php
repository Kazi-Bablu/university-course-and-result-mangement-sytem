<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroll_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reg_num');
            $table->string('s_name');
            $table->string('email');
            $table->string('department_id');
            $table->string('course_id');
            $table->dateTimeTz('date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enroll_courses');
    }
}
