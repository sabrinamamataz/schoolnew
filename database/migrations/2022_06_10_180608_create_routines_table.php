<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->id();
            $table->integer('section_id');
            $table->string('week_day')->nullable();
            $table->string('period_1_sub_id')->nullable();
            $table->string('period_1_t_id')->nullable();
            $table->string('period_2_sub_id')->nullable();
            $table->string('period_2_t_id')->nullable();
            $table->string('period_3_sub_id')->nullable();
            $table->string('period_3_t_id')->nullable();
            $table->string('period_4_sub_id')->nullable();
            $table->string('period_4_t_id')->nullable();
            $table->string('period_break')->nullable();
            $table->string('period_5_sub_id')->nullable();
            $table->string('period_5_t_id')->nullable();
            $table->string('period_6_sub_id')->nullable();
            $table->string('period_6_t_id')->nullable();
            $table->string('period_7_sub_id')->nullable();
            $table->string('period_7_t_id')->nullable();
            $table->string('period_8_sub_id')->nullable();
            $table->string('period_8_t_id')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('routines');
    }
}
