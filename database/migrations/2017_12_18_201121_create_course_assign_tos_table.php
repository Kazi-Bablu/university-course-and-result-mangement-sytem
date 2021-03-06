<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseAssignTosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_assign_tos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id');
            $table->integer('teacher');
            $table->integer('credit_taken');
            $table->integer('remain_credit');
            $table->string('course');
            $table->string('C_name');
            $table->string('course_credit');
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
        Schema::dropIfExists('course_assign_tos');
    }
}
