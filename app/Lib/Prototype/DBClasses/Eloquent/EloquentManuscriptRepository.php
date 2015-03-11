<?php
namespace App\Lib\Prototype\DBClasses\Eloquent;

// use App\Lib\Prototype\Interfaces\BookInterface;
use App\Lib\Prototype\BaseClasses\AbstractEloquentRepository;
use App\Lib\Prototype\Interfaces\ManuscriptInterface;
use App\Manuscript;
use Input;


class EloquentManuscriptRepository extends AbstractEloquentRepository implements ManuscriptInterface
{

	public function __construct(Manuscript $model)
	{
		$this->model = $model;
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
		$manuscript->fill($data);
		$manuscript->save();

		return $manuscript;
	}

	public function getByStatus($status = null){
		if ($status) {

			return Manuscript::getInReviewByStatus($status);
		}
		
		return $this->all();
	}

	public function uploadFile(){
		if(doUploadDocument()){
			
			return $_FILES["file"]["name"];
		}

		return '';
	}
}
