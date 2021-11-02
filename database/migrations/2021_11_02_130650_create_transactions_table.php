<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->bigInteger('user_id')->unsigned();

            $table->string('name');

            $table->string('amount');

            $table->string('currency');

            $table->string('channel');

            $table->string('user_code');

            $table->string('number_of_accounts');

            $table->string('payment_proof');

            $table->string('note')->nullable();

            $table->string('status')->default('secondary');

            $table->foreign('user_id')->references('id')->on('users'); 

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
