<?php

namespace Src\Bmanagerbowl\User\Domain\ValueObjects;

class UserRememberToken
{
    public function __construct(string $remembertoken)
    {
        $this->validate($remembertoken);
        $this->value = $remembertoken;
    }


    public function validate(string $remembertoken): void
    {

    }


    public function value(): ?string
    {
        return $this->value;
    }
}