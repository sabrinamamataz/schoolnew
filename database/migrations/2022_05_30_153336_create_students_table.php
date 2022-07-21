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
            $table->string('date_of_birth')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_no')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->default(0);
            $table->string('admit_no')->nullable();
            $table->string('pro_pic')->nullable();
            $table->string('roll')->nullable();
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
