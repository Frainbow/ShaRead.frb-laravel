<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('store_id');
            $table->integer('book_id');
            $table->integer('book_case_id');
            $table->integer('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('book_lists');
    }
}
