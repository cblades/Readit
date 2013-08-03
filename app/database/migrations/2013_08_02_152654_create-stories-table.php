<?php

use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stories', function($table) {
			$table->increments('id');
			$table->string('title', 500);
			$table->string('description', 500);
			$table->integer('user_id');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('user_id')
			      ->references('id')->on('users')
			      ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stories');
	}

}