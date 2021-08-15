<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->string('label');
            $table->enum('field_type',['text','textarea','color','select','file','url','number','tel','switch'])->default('text');
            $table->string('value',1000)->nullable()->default('NULL');
            $table->string('category')->default('general');
            $table->longtext('options')->nullable();
            $table->timestamps();
            $table->tinyInteger('flag')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_settings');
    }
}
