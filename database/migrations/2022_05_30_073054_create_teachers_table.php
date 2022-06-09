<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('subject_id')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('designation')->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->default(0);
            $table->string('joining')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
