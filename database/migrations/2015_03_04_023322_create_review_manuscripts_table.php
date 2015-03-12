<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewManuscriptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('review_manuscripts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('manuscript_id');
			$table->integer('user_id');
			$table->integer('loop');
			$table->string('review');
			$table->string('file');
			$table->tinyInteger('decide');
			$table->string('name');
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
		Schema::drop('review_manuscripts');
	}

}
