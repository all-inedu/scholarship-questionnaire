<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_guest');
            $table->string('category');
            $table->string('questions_number');
            $table->string('answer');
            $table->timestamps();

            $table->foreign('id_guest')->references('id')->on('tbl_guests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_answers');
    }
}