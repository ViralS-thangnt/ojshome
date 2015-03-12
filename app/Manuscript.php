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
							'section_loop',
							'review_loop',
							'screen_loop', 
							'send_at'];
	protected $guarded 	= ['id'];

	public static function getByStatus($status){

		return Manuscript::where('status', '=', $status)->get();
	}

	public static function getDataAndPermissionInReview($user){

		$permissions = explode(',', $user->actor_no);

		if(in_array(ADMIN, $permissions) || in_array(CHIEF_EDITOR, $permissions)) {

			$manuscripts = Manuscript::where('status', '=', IN_REVIEW)
							->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
							->leftJoin('section_manuscripts', function($join){
								$join->on('users.id', '=', 'section_manuscripts.user_id')
									->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
							})
							->leftJoin('review_manuscripts', function($join){
								$join->on('users.id', '=', 'section_manuscripts.user_id')
									->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
							})
							->select('manuscripts.id', 'manuscripts.send_at', 'manuscripts.name',
									'manuscripts.chief_decide as round_decide_chief_editor',
									'users.last_name', 'users.first_name', 'users.middle_name',
									'section_manuscripts.section_loop as round_no_review',
									'section_manuscripts.user_id as section_editor',
									'manuscripts.is_chief_review as notify_chief_editor',
									'review_manuscripts.user_id as reviewer')
							->get();

			return array('manuscripts' => $manuscripts, 'permission' => CHIEF_EDITOR);

		} else if(in_array(SECTION_EDITOR, $permissions)) {

			$manuscripts = Manuscript::where('status', '=', IN_REVIEW)
							->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
							->leftJoin('section_manuscripts', function($join){
								$join->on('users.id', '=', 'section_manuscripts.user_id')
									->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
							})
							->leftJoin('review_manuscripts', function($join){
								$join->on('users.id', '=', 'section_manuscripts.user_id')
									->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
							})
							->select('manuscripts.id', 'manuscripts.send_at', 'manuscripts.name',
									'manuscripts.chief_decide as round_decide_chief_editor',
									'users.last_name', 'users.first_name', 'users.middle_name',
									'section_manuscripts.section_loop as round_no_review',
									'section_manuscripts.user_id as section_editor',
									'manuscripts.is_chief_review as notify_chief_editor')
							->get();

			return array('manuscripts' => $manuscripts, 'permission' => SECTION_EDITOR);

		} else if(in_array(MANAGING_EDITOR, $permissions)) {
			
			$manuscripts = Manuscript::where('status', '=', IN_REVIEW)
							->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
							->leftJoin('section_manuscripts', function($join){
								$join->on('users.id', '=', 'section_manuscripts.user_id')
									->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
							})
							->leftJoin('review_manuscripts', function($join){
								$join->on('users.id', '=', 'section_manuscripts.user_id')
									->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
							})
							->select('manuscripts.id', 'manuscripts.send_at', 'manuscripts.name',
									'manuscripts.chief_decide as round_decide_chief_editor',
									'users.last_name', 'users.first_name', 'users.middle_name',
									'section_manuscripts.section_loop as round_no_review',
									'section_manuscripts.user_id as section_editor',
									'review_manuscripts.user_id as reviewer')
							->get();

			return array('manuscripts' => $manuscripts, 'permission' => MANAGING_EDITOR);

		} else if (in_array(AUTHOR, $permissions)) {

			$manuscripts = Manuscript::where('status', '=', IN_REVIEW)
							->where('manuscripts.author_id', '=', $user->id)
							->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
							->leftJoin('section_manuscripts', function($join){
								$join->on('users.id', '=', 'section_manuscripts.user_id')
									->on('manuscripts.id', '=', 'section_manuscripts.manuscript_id');
							})
							->select('manuscripts.id', 'manuscripts.send_at', 'manuscripts.name',
									'users.last_name', 'users.first_name', 'users.middle_name', 
									'section_manuscripts.section_loop as round_no_review',
									'section_manuscripts.section_editor_comments as round_decide_editor')
							->get();

			return array('manuscripts' => $manuscripts, 'permission' => AUTHOR);
		} 
	}
	
	public function scopeStatus($query, $status, $author_id)
	{

		return $query->select('manuscripts.*', 'users.last_name', 'users.first_name', 'users.middle_name')
					 ->leftJoin('users', 'users.id', '=', 'manuscripts.author_id')
					 ->where('manuscripts.status', '=', $status)
					 ->where('manuscripts.author_id', '=', $author_id)
					 ->get();
	}

	public function user(){

        return $this->belongsTo('User', 'author_id');
    }
}
