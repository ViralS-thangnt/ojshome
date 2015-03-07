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

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	// public function store(ManuscriptRequest $request)
	// {
	// 	Session::put('user_login_id', '1');		//Only for test - User logined
	// 	dd(Input::all());
		
	// 	$this->repo->create(
	// 		array_merge(
	// 			Input::except('_token', 'publish_journal_id'), 
	// 			['author_id' => Session::get('user_login_id')]));

	// 	return 'Success';
	// }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ManuscriptRequest $request, $id = null)
	{
		$this->repo->formModify(Input::all(), $id);

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
