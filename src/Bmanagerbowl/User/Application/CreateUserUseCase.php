<?php

namespace Src\Bmanagerbowl\User\Application;

use DateTime;
use Src\Bmanagerbowl\User\Domain\Contracts\UserRepositoryContract;
use Src\Bmanagerbowl\User\Domain\User;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserEmail;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserEmailVerifiedDate;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserName;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserPassword;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserRememberToken;

final class CreateUserUseCase
{
    /**
     * @var \Src\Bmanagerbowl\User\Domain\Contracts\UserRepositoryContract
     */
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(
      string $userName,
      string $userEmail,
      ?DateTime $userEmailVerifiedDate,
      string $userPassword,
      ?string $userRememberToken
    ): void
    {
        $name = new UserName($userName);
        $email = new UserEmail($userEmail);
        $emailVerifiedDate = new UserEmailVerifiedDate($userEmailVerifiedDate);
        $password = new UserPassword($userPassword);
        $rememberToken= new UserRememberToken($userRememberToken);

        $user = User::create($name, $email, $emailVerifiedDate, $password, $rememberToken);

        $this->repository->save($user);
        )

    }

}