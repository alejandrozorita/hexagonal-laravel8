<?php

namespace Src\Bmanagerbowl\User\Application;

use Src\Bmanagerbowl\User\Domain\Contracts\UserRepositoryContract;
use Src\Bmanagerbowl\User\Domain\User;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserEmail;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserName;

class GetUserByCriteriaUseCase
{
    /**
     * @var \Src\Bmanagerbowl\User\Application\UserRepositoryContract
     */
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $userName, string $userEmail): ?User
    {
        $name  = new UserName($userName);
        $email = new UserEmail($userEmail);

        $user = $this->repository->findByCriteria($name, $email);

        return $user;
    }
}