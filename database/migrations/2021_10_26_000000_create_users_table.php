<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
             $table->id();
              $table->string('username');
              $table->string('email');
              $table->string('password');
              $table->string('role');
              $table->string('is_active');
              $table->unSignedInteger('teacher_id');
              $table->unSignedInteger('oparetor_id');
              $table->unSignedInteger('student_id');
              $table->foreign('teacher_id')->references('id')->on('teachers')->onUpdate('cascade')->onDelete('cascade');
             $table->foreign('oparetor_id')->references('id')->on('oparetors')->onUpdate('cascade')->onDelete('cascade');
              $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
