<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSectionEditorNoToSectionLoop extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (Schema::hasColumn('section_manuscripts', 'section_editor_no'))
		{
			Schema::table('section_manuscripts', function($table)
			{
				$table->renameColumn('section_editor_no', 'section_loop');
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
