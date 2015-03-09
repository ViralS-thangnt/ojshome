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
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function form($id = null)
	{
		// dd(Input::all());
		if ($id) 
		{
			$manuscripts = $this->repo->getById($id);
		} 
		else 
		{
			$manuscripts = $this->repo;
		}

		// dd($manuscripts);
		return view('manuscripts.form', compact('manuscripts', 'id'));
	}


	// public function confirm()
	// {
	// 	// echo 'djklsa;fjl;';
	// 	echo 'confirm';
	// 	dd($request);

	// 	return view('manuscripts.confirm')->with('data', Input::all());
	// }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ManuscriptRequest $request, $id = null)
	{
		// dd(Input::all());
		$this->repo->formModify(Input::except('_token', 'confirm'), $id);

		return redirect('/admin');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function destroy($id)
	// {
	// 	//
	// }

}
