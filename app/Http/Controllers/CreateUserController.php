<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class CreateUserController extends BaseController
{

    /**
     * @var \Src\Bmanagerbowl\User\Infrasrtucture\CreateUserController
     */
    private $createUserController;

    public function __construct(\Src\Bmanagerbowl\User\Infrasrtucture\CreateUserController $createUserController)
    {
        $this->createUserController = $createUserController;
    }


    /**
     * Handle the incoming request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $newUser = $this->createUserController->__invoke($request);

        return response($newUser, 201);
    }

}
