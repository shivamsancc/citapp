<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cit_certificates', function (Blueprint $table) {
            $table->id();
        		$table->string('sl_no');
        		$table->string('cert_no')->nullable();;
        		$table->string('name')->nullable();;
        		$table->string('fname')->nullable();;
        		$table->string('certificate')->nullable();;
        		$table->string('iname')->nullable();;
        		$table->string('reg_no')->nullable();;
        		$table->string('grade')->nullable();;
        		$table->string('gradeper')->nullable();;
        		$table->string('period_from')->nullable();;
        		$table->string('period_to')->nullable();;
        		$table->string('roll1')->nullable();;
        		$table->string('roll2')->nullable();;
        		$table->string('theory_1')->nullable();;
        		$table->string('practical_1')->nullable();;
        		$table->string('total_1')->nullable();;
        		$table->string('theory_2')->nullable();;
        		$table->string('practical_2')->nullable();;
        		$table->string('total_2')->nullable();;
        		$table->string('grandtotal')->nullable();;
        		$table->string('course_1')->nullable();;
        		$table->string('course_2')->nullable();;
        		$table->string('doi')->nullable();;
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
        Schema::dropIfExists('cit_certificates');
    }
}
