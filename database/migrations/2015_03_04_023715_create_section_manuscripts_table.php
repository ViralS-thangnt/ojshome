<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionManuscriptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('section_manuscripts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('manuscript_id');
			$table->integer('user_id');
			$table->integer('section_loop');
			$table->string('section_editor_comments');
			
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
		Schema::drop('section_manuscripts');
	}

}
