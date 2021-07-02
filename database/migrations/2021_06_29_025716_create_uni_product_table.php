<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uni_product', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('sku')->nullable();
            $table->text('desscription')->nullable();
            $table->text('meta_desscription')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('content')->nullable();
            $table->text('content_more')->nullable();
            $table->integer('lotproduct_id')->nullable();
            $table->integer('qty')->nullable();
            $table->biginteger('price')->nullable(); 
            $table->biginteger('price_sale')->nullable(); 
            $table->biginteger('price_sale_store')->nullable(); 
            $table->tinyInteger('status');
            $table->tinyInteger('is_hot');
            $table->tinyInteger('is_feauture');
            $table->integer('order')->nullable();
            $table->text('thumnail')->nullable();
            $table->text('box_thumnail')->nullable();
            $table->text('album')->nullable();
            $table->timestamp('created_by')->nullable();
            $table->timestamp('updated_by')->nullable();
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
        Schema::dropIfExists('uni_product');
    }
}
