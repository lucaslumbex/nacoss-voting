<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_center', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('chosen_candidate');
            $table->string('chosen_candidate_pic');
            $table->string('voter_email');
            $table->string('voter_matric_no');

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
        Schema::drop('vote_center');
    }
}
