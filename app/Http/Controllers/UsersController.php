<?php namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Lib\Prototype\DbClasses\Eloquent\EloquentUserRepository;
use Constant;
use Input;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $userRepo;

    public function __construct(EloquentUserRepository $userRepo)
    {
        //$this->middleware('auth');
        $this->userRepo = $userRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return Constant::list_actors();
    }

    public function form($id = null)
    {
        if ($id) {
            $user = $this->userRepo->getById($id);
        } else {
            $user = $this->userRepo;
        }

        return view('users.form', compact('user', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UserRequest $request, $id = null)
    {
        $this->userRepo->formModify(Input::all(), $id);

        return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
