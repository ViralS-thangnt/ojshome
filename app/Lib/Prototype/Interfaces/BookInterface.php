<?php
namespace App\Lib\Prototype\Interfaces;

use App\Lib\Prototype\Interfaces\BaseIntreface;

interface BookInterface extends BaseInterface
{

    public function formModify($data, $id = null);
}
