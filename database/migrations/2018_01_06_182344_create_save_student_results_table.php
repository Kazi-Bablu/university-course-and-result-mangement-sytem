<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaveStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_student_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reg_number');
            $table->string('st_name');
            $table->string('email_ad');
            $table->string('department_na');
            $table->string('course_id');
            $table->string('grade');
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
        Schema::dropIfExists('save_student_results');
    }
}
