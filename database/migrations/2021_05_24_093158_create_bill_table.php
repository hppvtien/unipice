<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->string('method_invoice')->nullable();
            $table->string('method_course')->nullable();
            $table->string('method_pay')->nullable();
            $table->string('method_email')->nullable();
            $table->string('method_customer')->nullable();
            $table->string('method_address')->nullable();
            $table->string('group_buy')->nullable();
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
        Schema::dropIfExists('bill');
    }
}
