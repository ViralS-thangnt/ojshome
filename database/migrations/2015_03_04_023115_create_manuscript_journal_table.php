<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuscriptJournalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manuscript_journal', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('manuscript_id');
			$table->integer('journal_id');
			$table->boolean('is_public');
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
		Schema::drop('manuscript_journal');
	}

}
