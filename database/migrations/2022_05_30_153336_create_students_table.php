<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('student_id')->nullable();
            $table->integer('age')->nullable();
            $table->string('class')->nullable();
            $table->string('date-of-birth')->nullable();
            $table->string('gaurdian_name')->nullable();
            $table->string('gaurdian_no')->nullable();
            $table->string('gaurdian_relation')->nullable();
            $table->string('adress')->nullable();
            $table->string('status');
            $table->string('admit_no')->nullable();
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
        Schema::dropIfExists('students');
    }
}
