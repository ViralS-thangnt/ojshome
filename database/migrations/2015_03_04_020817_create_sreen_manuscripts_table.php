<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSreenManuscriptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('screen_manuscripts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('manuscript_id');
			$table->integer('user_id');
			$table->integer('screen_editor_no');
			$table->integer('screen_editor_review');
			$table->integer('screen_editor_suggest');
			$table->tinyInteger('decide');
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
		Schema::drop('screen_manuscripts');
	}

}
