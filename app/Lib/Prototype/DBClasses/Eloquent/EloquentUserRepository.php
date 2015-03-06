<?php
namespace App\Lib\Prototype\DBClasses\Eloquent;

use App\Lib\Prototype\Interfaces\UserInterface;
use App\Lib\Prototype\BaseClasses\AbstractEloquentRepository;
use App\User;
use Session;
use App\Helpers\ConstantArray;

class EloquentUserRepository extends AbstractEloquentRepository implements UserInterface
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function formModify($data, $id = null)
    {
        if ($id) {
            $user = $this->model->find($id);
        } else {
            $user = $this->model;
        }

        $user->fill($data);
        $user->save();
    }

    public function checkPermission(){
        if(Session::has('user_login_id')){
            // dd(Session::get('user_login_id'));
            $per_no = User::getPermissionById(Session::get('user_login_id'));
            // dd($per_no);

            $actor = (new ConstantArray)->actor($per_no);
            dd($actor);

            
            dd(permission($actor));
            permission($actor);

            return view('dashboard.dashboard')->with('permission', $per_no);
        } else {

            dd('dls;ajlfsa');
        }
    }
}
