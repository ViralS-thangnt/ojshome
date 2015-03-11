<?php namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Guard;


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

<<<<<<< HEAD


	public static function getByStatus($status){

		return Manuscript::where('status', '=', $status)->get();
	}


	public static function getInReviewByStatus($status, $user_id){
		// dd(Manuscript::where('status', '=', $status)
		// 					->where('manuscripts.author_id', '=', $user_id)
		// 					->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
		// 					->leftJoin('section_manuscripts', function($join){
		// 						$join->on('users.id', '=', 'section_manuscripts.user_id')
		// 							->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
		// 					})
		// 					->select('manuscripts.*', 'users.last_name', 'users.first_name', 'users.middle_name', 'section_manuscripts.*')
		// 					->get());

		return Manuscript::where('status', '=', $status)
							->where('manuscripts.author_id', '=', $user_id)
							->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
							->leftJoin('section_manuscripts', function($join){
								$join->on('users.id', '=', 'section_manuscripts.user_id')
									->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
							})
							->select('manuscripts.*', 'users.last_name', 'users.first_name', 'users.middle_name', 'section_manuscripts.section_editor_no as round_loop_review')
							->get();

=======
	public function scopeStatus($query, $status, $author_id)
	{
		return $query->select('manuscripts.*', 'users.last_name', 'users.first_name', 'users.middle_name')
					 ->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
					 ->where('manuscripts.status', '=', $status)
					 ->where('manuscripts.author_id', '=', $author_id)
					 ->get();
>>>>>>> 710d2573e7dc789d72157ff4b7138a1309720d13
	}

	public function user(){

        return $this->belongsTo('User', 'author_id');
    }

}
