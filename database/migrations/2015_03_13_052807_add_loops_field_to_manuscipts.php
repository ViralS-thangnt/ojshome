<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLoopsFieldToManuscipts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasColumn('manuscripts', 'review_loop'))
		{
			Schema::table('manuscripts', function(Blueprint $table)
			{
				$table->integer('review_loop')->after('file');
			});
		}

		if (!Schema::hasColumn('manuscripts', 'screen_loop'))
		{
			Schema::table('manuscripts', function(Blueprint $table)
			{
				$table->integer('screen_loop')->after('file');
			});
		}

		if (!Schema::hasColumn('manuscripts', 'section_loop'))
		{
			Schema::table('manuscripts', function(Blueprint $table)
			{
				$table->integer('section_loop')->after('file');
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
