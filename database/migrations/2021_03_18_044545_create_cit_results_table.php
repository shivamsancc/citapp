<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cit_results', function (Blueprint $table) {
            $table->id();
        		$table->string('exam')->nullable();;
        		$table->string('roll')->nullable();;
        		$table->string('name')->nullable();;
        		$table->string('fname')->nullable();;
        		$table->string('course')->nullable();;
        		$table->string('regno')->nullable();;
        		$table->string('session')->nullable();;
        		$table->string('duration')->nullable();;
        		$table->string('examdate')->nullable();;
        		$table->string('studycentre')->nullable();;
        		$table->string('theorytotal')->nullable();;
        		$table->string('tmasgg')->nullable();;
        		$table->string('pmt')->nullable();;
        		$table->string('pmagg')->nullable();;
        		$table->string('ptmagg')->nullable();;
        		$table->string('ovp')->nullable();;
            $table->string('grade')->nullable();
        		$table->string('exam_status')->nullable();
        		$table->text('coursedetails')->nullable();;
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
        Schema::dropIfExists('cit_results');
    }
}
