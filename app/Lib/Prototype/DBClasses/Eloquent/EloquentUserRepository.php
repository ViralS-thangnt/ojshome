<?php
namespace App\Lib\Prototype\DBClasses\Eloquent;

use App\Lib\Prototype\Interfaces\UserInterface;
use App\Lib\Prototype\BaseClasses\AbstractEloquentRepository;
use App\User;
use Session;
use Constant;


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

        if ($data['actor_no']) {
            $data['actor_no'] = implode(',', $data['actor_no']);
        }

        $data['password'] = sha1($data['password']);

        $user->fill($data);
        $user->save();
    }

    public function getPermission()
    {
        if (Session::has('user_login_id')) {
            $actor_no = User::getPermissionById(Session::get('user_login_id'));
            
            return explode(',', $actor_no);
        }

        return '';
    }
}
