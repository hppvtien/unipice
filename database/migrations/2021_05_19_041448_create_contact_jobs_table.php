<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('j_fullname')->nullable();
            $table->integer('j_job_id')->nullable();
            $table->string('j_email')->nullable();
            $table->string('j_phone')->nullable();
            $table->text('j_address')->nullable();
            $table->string('j_file_cv')->nullable();
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
        Schema::dropIfExists('contact_jobs');
    }
}
