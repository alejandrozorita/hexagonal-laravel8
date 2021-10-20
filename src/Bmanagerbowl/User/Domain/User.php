<?php

namespace Src\Bmanagerbowl\User\Domain;

use Src\Bmanagerbowl\User\Domain\ValueObjects\UserEmail;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserEmailVerifiedDate;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserName;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserPassword;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserRememberToken;

final class User
{
    private $name;
    private $email;
    private $emailVerifiedDate;
    private $password;
    private $rememberToken;

    public function __construct(
      UserName $name,
      UserEmail $email,
      UserEmailVerifiedDate $emailVerifiedDate,
      UserPassword $password,
      UserRememberToken $rememberToken
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->emailVarifiedDate = $emailVerifiedDate;
        $this->password = $password;
        $this->rememberToken = $rememberToken;
    }


    public function name(): UserName
    {
        return $this->name;
    }


    public function email(): UserEmail
    {
        return $this->email;
    }

    public function emailVerifiedDate(): EmailVerifiedDate
    {
        return $this->emailVerifiedDate;
    }

    public function password(): UserPassword
    {
        return $this->password;
    }

    public function rememberToken(): UserRememberToken
    {
        return $this->rememberToken;
    }


    public function create(
      UserName $name,
      UserEmail $email,
      UserEmailVerifiedDate $emailVerifiedDate,
      UserPassword $password,
      UserRememberToken $rememberToken
    ): User
    {
        $user = new self($name, $email, $emailVerifiedDate, $password, $rememberToken);

        return $user;
    }

}