<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_feat_img');
            $table->longtext('course_discription')->nullable();
            $table->longtext('student_learn')->nullable();
            $table->longtext('course_outcome')->nullable();
            $table->tinyText('no_of_lession');
            $table->tinyText('duration');
            $table->tinyText('prequisite');
            $table->tinyText('certification');
            $table->longtext('course_curricularm')->nullable();
            $table->string('slug');
            $table->longtext('categories')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
