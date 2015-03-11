<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Admin\ManuscriptsController;

use Illuminate\Http\Request;
use App\Http\Requests\ManuscriptRequest;


use App\Lib\Prototype\DBClasses\Eloquent\EloquentManuscriptRepository;

use Input;
use Session;

class ManuscriptsController extends Controller {

	protected $repo;

	public function __construct(EloquentManuscriptRepository $repo){
		$this->middleware('auth');
		$this->repo = $repo;
		\App::setLocale(\Session::get('lang', 'en'));
	}

	public function unsubmit()
	{
		
	}


	public function inReview()
	{
		$manuscripts = $this->repo->getByStatus(IN_REVIEW);

		// dd($manuscripts->get()->first());

		return view('manuscripts.manuscript')
				->with('data', $manuscripts)
				->with('is_odd', true);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function form($id = null)
	{
		if ($id) {
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
