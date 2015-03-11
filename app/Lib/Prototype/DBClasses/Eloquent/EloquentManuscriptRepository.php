<?php namespace App\Lib\Prototype\DBClasses\Eloquent;

use Illuminate\Contracts\Auth\Guard;
use App\Lib\Prototype\BaseClasses\AbstractEloquentRepository;
use App\Lib\Prototype\Interfaces\ManuscriptInterface;
use App\Manuscript;
use Input;


class EloquentManuscriptRepository extends AbstractEloquentRepository implements ManuscriptInterface
{

	public function __construct(Manuscript $model, Guard $auth)
	{
		$this->model = $model;
		$this->auth = $auth;
		$this->user = $this->auth->user();
	}

	public function formModify($data, $id = null)
	{
		if($id){
			$manuscript = $this->model->find($id);
		}
		else 
		{
			$manuscript = $this->model;
		}

		$data['author_id'] = $this->user->id;
		$manuscript->fill($data);
		$manuscript->save();

		return $manuscript;
	}

	public function getByStatus($status){
		return Manuscript::status($status, $this->user->id);
	}

	public function uploadFile(){
		if(doUploadDocument()){
			
			return $_FILES["file"]["name"];
		}

		return '';
	}
}
