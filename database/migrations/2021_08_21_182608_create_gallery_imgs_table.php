<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('gallery_img_name');
            $table->longtext('gallery_name');
            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->tinyInteger('flag')->default('1');
            $table->timestamps();
            $table->foreign('gallery_id')->references('id')->on('galleries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_imgs');
    }
}
