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

		// $keyword_vi = Input::get('keyword_vi');

		$keyword_vi = empty(Input::get('keyword_vi')) ? null : implode(',', Input::get('keyword_vi')); 
		$keyword_en = empty(Input::get('keyword_en')) ? null : implode(',', Input::get('keyword_en')); 
		$type = empty(Input::get('type')) ? null : implode(',', Input::get('type'));
		// dd($keyword_en);
		// $temp = Input::all();
		// $temp = array_merge($temp, ['keyword_vi' => $keyword_vi, 'keyword_en' => $keyword_en, 'type' => $type]);
		
		// dd($temp);
		Input::merge(['keyword_vi' => $keyword_vi, 'keyword_en' => $keyword_en, 'type' => $type]);

		// dd(Input::all());
		// $this->redirectRoute = "manuscript.confirm";
		return [
			'author_comments'		=> 'required', 
			'type'					=> 'required', 
			'expect_journal_id'		=> 'numeric', 
			
			'name'					=> 'required',//|max:20', 
			'summary_vi'			=> 'required',//|min:150|max:200', 
			'keyword_vi'			=> 'required', 
			'summary_en'			=> 'required',//|min:150|max:200', 
			'keyword_en'			=> 'required', 
			'topic'					=> 'required', 
			'recommend'				=> '', 
			'propose_reviewer'		=> '',
			'co_author'				=> '', 
			'confirm'				=> 'in:1', 
			'file_upload'			=> 'required'

			// 'publish_journal_id'	=> 'numeric', 

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
