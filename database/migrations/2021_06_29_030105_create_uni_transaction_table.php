<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uni_transaction', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('admin_id')->nullable();
            $table->integer('total_money')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('method_pay')->nullable();
            $table->integer('address')->nullable();
            $table->integer('type_pay')->nullable();
            $table->string('node_pay')->nullable();
            $table->string('code_pay')->nullable();
            $table->string('voucher')->nullable();
            $table->string('time_process')->nullable();
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
        Schema::dropIfExists('uni_transaction');
    }
}
