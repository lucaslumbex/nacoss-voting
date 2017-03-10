<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_name');
            $table->integer('max_no_of_candidate')->unsigned();
//            $table->string('max_no_of_candidate');

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
        Schema::drop('vote_categories');
    }
}
