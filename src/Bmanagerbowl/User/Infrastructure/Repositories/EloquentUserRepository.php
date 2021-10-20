<?php

namespace Src\Bmanagerbowl\User\Infrasrtucture\Repositories;
use App\Models\User as EloquentUserModel;
use Src\Bmanagerbowl\User\Domain\Contracts\UserRepositoryContract;
use Src\Bmanagerbowl\User\Domain\User;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserEmail;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserId;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserName;

class EloquentUserRepository implements UserRepositoryContract
{
    private $eloquentUserModel;

    public function __construct()
    {
        $this->eloquentUserModel = new EloquentUserModel;
    }


    public function save(User $user): void
    {
        $newUser = $this->eloquentUserModel;

        $data = [
          'name' => $user->name()->value(),
          'email' => $user->email()->value(),
          'email_verified_at' => $user->password()->value(),
          'remember_token' => $user->rememberToken()->value()
        ];
        $newUser->create($data);
    }


    public function find(UserId $id): ?User
    {
        // TODO: Implement find() method.
    }


    public function findByCriteria(UserName $userName, UserEmail $userEmail): ?User
    {
        // TODO: Implement findByCriteria() method.
    }


    public function update(UserId $userId, User $user): void
    {
        // TODO: Implement update() method.
    }


    public function delete(UserId $id): void
    {
        // TODO: Implement delete() method.
    }

}