<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterScreenEditorNoToScreenLoop extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (Schema::hasColumn('screen_manuscripts', 'screen_editor_no'))
		{
			Schema::table('screen_manuscripts', function($table)
			{
				$table->renameColumn('screen_editor_no', 'screen_loop');
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
