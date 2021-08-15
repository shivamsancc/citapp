<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosibleJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posible_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->string('slug');
            $table->longtext('job_discription')->nullable();
            $table->tinyInteger('flag')->default('1');
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
        Schema::dropIfExists('posible_jobs');
    }
}
