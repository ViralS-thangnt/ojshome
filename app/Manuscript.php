<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model {
	public $timestamps 	= true;
	protected $table 	= 'manuscripts';
	protected $fillable = ['author_id', 
							'author_comments', 
							'type', 
							'expect_journal_id', 
							'publish_journal_id',
							'name', 
							'summary_vi', 
							'keyword_vi', 
							'summary_en', 
							'keyword_en', 
							'topic', 
							'recommend', 
							'propose_reviewer',
							'co_author', 
							'file', 
							'is_chief_review', 
							'chief_decide', 
							'is_revise', 
							'is_print_out',
							'is_pre_public', 
							'status', 
							'num_page',  
							'file_final', 
							'send_at'];
	protected $guarded 	= ['id'];

	public static function getByStatus($status){

		return Manuscript::where('status', '=', $status)->get();

	}

	public static function getInReviewByStatus($status){

		return Manuscript::where('status', '=', $status)
							->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
							->select('manuscripts.*', 'users.last_name', 'users.first_name', 'users.middle_name')
							->get();

	}

}
