<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function(Blueprint $table) {
            $table->increments('id');
            $table -> integer('author_id') -> unsigned() -> default(0);
            $table -> integer('category_id') -> unsigned() -> default(0);
            $table->foreign('author_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
             $table->foreign('category_id')
                    ->references('id')->on('category')
                    ->onDelete('cascade');
            $table->string('title')->unique();
            $table->text('description');
            $table->text('body');
            $table->string('slug')->unique();
            $table->boolean('active');
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post');
    }
}
