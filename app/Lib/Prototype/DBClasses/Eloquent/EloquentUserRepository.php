<?php
namespace App\Lib\Prototype\DBClasses\Eloquent;

use App\Lib\Prototype\Interfaces\UserInterface;
use App\Lib\Prototype\BaseClasses\AbstractEloquentRepository;
use Illuminate\Contracts\Auth\Guard;
use App\User;
use Session;
use Constant;


class EloquentUserRepository extends AbstractEloquentRepository implements UserInterface
{
    protected $auth;

    public function __construct(User $model, Guard $auth)
    {
        $this->model = $model;
        $this->auth = $auth;
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
        $user = $this->auth->user();

        if ($user->actor_no) {
            return explode(',', $user->actor_no);
        }

        return false;
    }
}
