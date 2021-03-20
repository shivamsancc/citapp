<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitAdmitcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cit_admitcards', function (Blueprint $table) {
            $table->id();
        		$table->string('sn');
        		$table->string('name')->nullable();;
        		$table->string('fname')->nullable();;
        		$table->string('ename')->nullable();;
        		$table->string('session')->nullable();;
        		$table->string('duration')->nullable();;
        		$table->string('regno')->nullable();;
        		$table->string('rollno')->nullable();;
        		$table->string('course')->nullable();;
        		$table->string('semester')->nullable();;
        		$table->string('scenter')->nullable();;
        		$table->string('ecenter')->nullable();;
        		$table->string('edate')->nullable();;
        		$table->string('rtime')->nullable();;
        		$table->string('notes')->nullable();;
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
        Schema::dropIfExists('cit_admitcards');
    }
}
