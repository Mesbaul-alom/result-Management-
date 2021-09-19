<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
             $table->string('student_name');
             $table->string('father_name');
             $table->string('mother_name');
             $table->string('board');
             $table->string('gender');
             $table->string('institute_name');
             $table->string('phone');
             $table->string('email');
             $table->date('dob');
            $table->string('department');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('password');
             $table->string('roll_number');
             $table->string('reg_no');
             $table->string('role');
             $table->string('image');
             $table->string('is_active');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
