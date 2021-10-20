<?php

namespace Src\Bmanagerbowl\User\Infrasrtucture;

use Illuminate\Http\Request;
use Src\Bmanagerbowl\User\Application\CreateUserUseCase;
use Src\Bmanagerbowl\User\Application\GetUserByCriteriaUseCase;
use Src\Bmanagerbowl\User\Infrasrtucture\Repositories\EloquentUserRepository;

class CreateUserController
{

    private $repository;


    public function __construct(EloquentUserRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @param  \Illuminate\Http\Request  $request
     */
    public function __invoke(Request $request)
    {
        $userName = $request->input('name');
        $userEmail = $request->input('email');
        $userEmailVerifiedDate = null;
        $userPassword = null;
        $userRememberToken = null;

        $createUserUseCase = new CreateUserUseCase($this->repository);

        $createUserUseCase->__invoke(
          $userName,
          $userEmail,
          $userEmailVerifiedDate,
          $userPassword,
          $userRememberToken
        );

        $getUserByCriteriaUseCase = new GetUserByCriteriaUseCase($this->repository);
        $newUser = $getUserByCriteriaUseCase->__invoke($userName, $userEmail);
        return $newUser;
    }

}