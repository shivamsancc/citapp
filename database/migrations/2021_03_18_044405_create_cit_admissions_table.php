<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cit_admissions', function (Blueprint $table) {
          $table->id();
          $table->string('sname')->nullable();;
          $table->string('fname')->nullable();;
          $table->string('course')->nullable();;
          $table->string('studycenter')->nullable();;
          $table->string('regno')->nullable();;
          $table->string('doa')->nullable();;
          $table->string('coc')->nullable();;
          $table->string('session')->nullable();;
          $table->string('Duration')->nullable();;
          $table->string('Batch_time')->nullable();;
          $table->string('status')->default('1')->nullable();
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
        Schema::dropIfExists('cit_admissions');
    }
}
