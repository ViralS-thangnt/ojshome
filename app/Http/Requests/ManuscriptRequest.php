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
		$keyword_vi = empty(Input::get('keyword_vi')) ? null : implode(',', Input::get('keyword_vi')); 
		$keyword_en = empty(Input::get('keyword_en')) ? null : implode(',', Input::get('keyword_en')); 
		$type = empty(Input::get('type')) ? null : implode(',', Input::get('type'));
		Input::merge(['keyword_vi' => $keyword_vi, 'keyword_en' => $keyword_en, 'type' => $type]);

		return [
			'type'					=> 'required', 
			'expect_journal_id'		=> 'numeric', 
			'name'					=> 'required|max:20', 
			'summary_vi'			=> 'required|min:150|max:200', 
			'keyword_vi'			=> 'required|max:5|min:3', 
			'summary_en'			=> 'required|min:150|max:200', 
			'keyword_en'			=> 'required|max:5|min:3', 
			'topic'					=> 'required', 
			'recommend'				=> '', 
			'propose_reviewer'		=> '',
			'co_author'				=> '', 
			'confirm'				=> 'in:1', 
			'file'					=> 'required'
		];
	}

}
