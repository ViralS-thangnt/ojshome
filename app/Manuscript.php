<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model {
	public $timestamps 	= true;
	protected $table 	= 'manuscripts';
	protected $fillable = [ 'author_id', 
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

}
