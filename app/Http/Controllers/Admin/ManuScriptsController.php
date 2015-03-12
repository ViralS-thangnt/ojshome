<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ManuscriptRequest;


use App\Lib\Prototype\DBClasses\Eloquent\EloquentManuscriptRepository;

use Input;
use Session;
use App\User;
use App\Manuscript;

class ManuscriptsController extends Controller {

	protected $repo;

	public function __construct(EloquentManuscriptRepository $repo){
		$this->middleware('auth');
		$this->repo = $repo;
		\App::setLocale(\Session::get('lang', 'en'));
	}

	public function unsubmit()
	{
		return view('manuscripts.index')->with([
											'manuscripts' 	=> $this->repo->getByStatus(UNSUBMIT),
											'permissions'	=> $this->repo->getPermission(),
										]);
	}

	public function inReview()
	{	
		// dd(Manuscript::authorId(11)->get());
		
		
		$data = $this->repo->getByStatus(IN_REVIEW);
		$result = ['data' => $data,
                 'col_header' => ['ID', 'Ngày gửi', 'Tên bài', 'Tác giả liên hệ', 'Tiến trình', 'Quyết định của ban biên tập'],
                 'col_db' => ['id', 'send_at', 'name', 'last_name', 'round_no_review', 'round_decide_editor']];

        return view('manuscripts.manuscript')
                    ->withResult($result);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function form($id = null)
	{
		if($id) {
			$manuscripts = $this->repo->getById($id);
		} 
		else 
		{
			$manuscripts = $this->repo;
		}
		
		return view('manuscripts.form', compact('manuscripts', 'id'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ManuscriptRequest $request, $id = null)
	{
		$this->repo->uploadFile();
		$this->repo->formModify(Input::except('_token', 'confirm'), $id);

		return redirect('/admin');
	}

	public function setLocale() {
        // TODO check lang is valid or exist
        $lang = $_GET['lang'];

        if($lang != '') {
            \Session::put('lang', $lang);
            \App::setLocale($lang);
            return json_encode($lang);
        }
        return json_encode($lang);
    }
}
