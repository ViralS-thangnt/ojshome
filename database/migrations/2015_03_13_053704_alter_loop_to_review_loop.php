<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterLoopToReviewLoop extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		if (Schema::hasColumn('review_manuscripts', 'loop'))
		{
			Schema::table('review_manuscripts', function(Blueprint $table) {
				$table->string('review_loop')->after('user_id');
			});
			DB::table('review_manuscripts')->update(array('review_loop' => 'loop'));
			Schema::table('review_manuscripts', function(Blueprint $table) {
				$table->dropColumn('loop');
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
