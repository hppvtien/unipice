<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniLotproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uni_lotproduct', function (Blueprint $table) {
            $table->id();
            $table->string('lot_name');
            $table->integer('supplier_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('qty');
            $table->integer('size');
            $table->integer('barcode');
            $table->timestamp('expiry_date')->nullable();
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
        Schema::dropIfExists('uni_lotproduct');
    }
}
