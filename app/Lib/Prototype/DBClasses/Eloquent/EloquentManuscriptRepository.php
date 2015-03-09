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
		// dd($this->model);
		// dd(Input::all());
		// echo 'EloquentManuscriptRepository -  ';
		// dd($id);
		if($id)
		{
			$manuscript = $this->model->find($id);
		}
		else 
		{
			$manuscript = $this->model;

		}
		// dd($this->model);
		// echo 'formModify - EloquentManuscriptRepository';
		// dd($data);
		
		$manuscript->fill($data);
		$manuscript->save();

		return $manuscript;
	}
}
