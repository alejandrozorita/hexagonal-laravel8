<?php

namespace Src\Bmanagerbowl\User\Domain\ValueObjects;

class UserName
{
    public function __construct(string $name)
    {
        $this->validate($name);
        $this->value = $name;
    }


    public function validate(string $name): void
    {

    }


    public function value(): ?string
    {
        return $this->value;
    }
}