<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;
use DateTime;

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
		Input::merge(['keyword_vi' => $keyword_vi, 'keyword_en' => $keyword_en, 'type' => $type, 'send_at' => new DateTime]);

		return [
			'type'					=> 'required', 
			'expect_journal_id'		=> 'numeric', 
			'name'					=> array('required', 'regex:/.*^[-\w]+(?:\W+[-\w]+){1,20}\W*$/'), //'required|max:20', 
			'summary_vi'			=> array('required', 'regex:/.*^[-\w]+(?:\W+[-\w]+){149,199}\W*$/'), //'required|min:150|max:200', 
			'keyword_vi'			=> 'required|max:5|min:3', 
			'summary_en'			=> array('required', 'regex:/.*^[-\w]+(?:\W+[-\w]+){149,199}\W*$/'),//'required|min:150|max:200', 
			'keyword_en'			=> 'required|max:5|min:3', 
			'topic'					=> 'required', 
			'recommend'				=> '', 
			'propose_reviewer'		=> '',
			'co_author'				=> '', 
			'confirm'				=> 'in:1', 
			'file'					=> 'required'
		];
	}

	public function messages()
	{
		return [
			'summary_vi.regex'		=>	'Từ khoá Tiếng Việt chỉ được nhập từ 150 - 200 từ',
			'summary_en.regex'		=>	'Từ khoá Tiếng Anh chỉ được nhập từ 150 - 200 từ ',
			'name.regex'			=>	'Tên chỉ được nhập từ 1 - 20 từ',
			'file.required'			=>	'Bạn chưa chọn file upload',
		];
	}

}
