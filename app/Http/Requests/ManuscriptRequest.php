<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;

class ManuscriptRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		// dd(Input::all());
		// $this->redirectRoute = "manuscript.confirm";
		return [
			// 'author_comments'		=> 'required', 
			'type'					=> 'required', 
			'expect_journal_id'		=> 'numeric', 
			'publish_journal_id'	=> 'numeric', 
			'name'					=> 'required',//|max:20', 
			'summary_vi'			=> 'required',//|min:150|max:200', 
			'keyword_vi'			=> 'required', 
			'summary_en'			=> 'required',//|min:150|max:200', 
			'keyword_en'			=> 'required', 
			'topic'					=> 'required', 
			'recommend'				=> '', 
			'propose_reviewer'		=> '',
			'co_author'				=> '', 

			// 'author_id'				=> 'required', 
			// 'file'					=> 'required',
			// 'file_final'				=> 'required',
			// 'is_chief_review'		=> 'required',  
			// 'is_revise'				=> 'required', 
			// 'is_print_out'			=> 'required',
			// 'is_pre_public'			=> 'required', 
			// 'status'					=> 'required', 
			// 'num_page'				=> 'required' 
		];
	}

}
