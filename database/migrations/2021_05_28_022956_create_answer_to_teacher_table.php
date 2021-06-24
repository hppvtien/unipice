<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerToTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_to_teacher', function (Blueprint $table) {
            $table->id();
            $table->integer('asw_teacher')->nullable();
            $table->string('asw_content')->nullable();
            $table->string('asw_image')->nullable();
            $table->string('asw_id_course')->nullable();
            $table->integer('asw_id_user')->nullable();
            $table->tinyInteger('asw_status')->nullable();
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
        Schema::dropIfExists('answer_to_teacher');
    }
}
