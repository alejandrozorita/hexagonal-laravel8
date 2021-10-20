<?php

namespace Src\Bmanagerbowl\User\Domain\ValueObjects;

class UserId
{
    public function __construct(int $userId)
    {
        $this->validate($userId);
        $this->value = $userId;
    }


    public function validate(int $userId): void
    {

    }


    public function value(): ?string
    {
        return $this->value;
    }
}