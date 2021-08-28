<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('page_title');
            $table->text('slug');
            $table->longtext('page_body');
            $table->string('meta_tilte');
            $table->string('meta_keyword');
            $table->longtext('meta_discription');
            $table->longtext('header_code');
            $table->longtext('footer_code');
            $table->string('visiblity');
            $table->string('status');
            $table->string('feat_img');
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
        Schema::dropIfExists('pages');
    }
}
