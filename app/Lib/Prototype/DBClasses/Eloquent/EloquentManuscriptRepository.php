<?php
namespace App\Lib\Prototype\DBClasses\Eloquent;

// use App\Lib\Prototype\Interfaces\BookInterface;
use App\Lib\Prototype\BaseClasses\AbstractEloquentRepository;
use App\Lib\Prototype\Interfaces\ManuscriptInterface;
use App\Manuscript;


class EloquentManuscriptRepository extends AbstractEloquentRepository implements ManuscriptInterface
{
    public function __construct(Manuscript $model)
    {
        $this->model = $model;
    }

    public function formModify($data, $id = null)
    {
        // if($id)
        // {
        //     $book = $this->model->find($id);
        // }
        // else 
        // {
        //     $book = $this->model;
        // }

        // $book->fill($data);
        // $book->save();

        // return $book;
    }
}
