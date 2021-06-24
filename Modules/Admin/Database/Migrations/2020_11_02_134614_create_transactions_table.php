<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('t_user_id')->default(0)->index();
            $table->integer('t_admin_id')->default(0);
            $table->integer('t_total_money')->default(0);
            $table->char('t_code')->nullable();
            $table->text('t_note')->nullable();
            $table->string('t_phone')->nullable();
            $table->tinyInteger('t_type_pay')->default(1);
            $table->tinyInteger('t_status')->default(1);
            $table->timestamp('t_time_process')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
