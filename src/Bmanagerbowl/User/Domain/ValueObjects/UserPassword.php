<?php

namespace Src\Bmanagerbowl\User\Domain\ValueObjects;

class UserPassword
{
    public function __construct(string $userPassWord)
    {
        $this->validate($userPassWord);
        $this->value = $userPassWord;
    }


    public function validate(string $userPassWord): void
    {

    }


    public function value(): ?string
    {
        return $this->value;
    }
}