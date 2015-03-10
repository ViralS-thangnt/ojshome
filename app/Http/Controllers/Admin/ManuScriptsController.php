<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ManuscriptRequest;

use App\Lib\Prototype\DBClasses\Eloquent\EloquentManuscriptRepository;
use Input;
use Session;

class ManuscriptsController extends Controller {

	protected $repo;

	public function __construct(EloquentManuscriptRepository $repo){
		// $this->middleware('auth');
		$this->repo = $repo;
		\App::setLocale(\Session::get('lang', 'en'));
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
}
