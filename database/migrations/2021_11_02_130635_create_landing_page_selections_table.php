<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPageSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_selections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('landing_page_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('status');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('landing_page_id')->references('id')->on('landing_pages');
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
        Schema::dropIfExists('landing_page_selections');
    }
}
