<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uni_store', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('store_name')->nullable();
            $table->string('store_thumbnail')->nullable();
            $table->string('store_area')->nullable();
            $table->string('store_address')->nullable();
            $table->string('store_album')->nullable();
            $table->integer('store_phone')->nullable();
            $table->tinyInteger('store_status')->nullable();
            $table->string('store_taxCode')->nullable();
            $table->string('store_avatar')->nullable();
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
        Schema::dropIfExists('uni_store');
    }
}
