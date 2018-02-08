<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocate_classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id');
            $table->integer('course_id');
            $table->string('Room_No');
            $table->date('date');
            $table->timeTz('start_time');
            $table->timeTz('end_time');
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
        Schema::dropIfExists('allocate_classrooms');
    }
}
