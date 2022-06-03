<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routings', function (Blueprint $table) {
            $table->id();
            $table->string('section_id');
            $table->string('week_day');
            $table->string('subject_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('period');
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
        Schema::dropIfExists('routings');
    }
}
