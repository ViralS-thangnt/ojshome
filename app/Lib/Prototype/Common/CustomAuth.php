<?php namespace App\Lib\Prototype\Common;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

trait CustomAuth
{
    use AuthenticatesAndRegistersUsers;

    public function postRegister(Request $request)
    {
        $validator = $this->registrar->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $this->auth->login($this->registrar->create($request->all()));

        return redirect($this->redirectPath());
    }
}
