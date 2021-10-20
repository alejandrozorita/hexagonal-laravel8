<?php

namespace Src\Bmanagerbowl\User\Domain\ValueObjects;

class UserEmailVerifiedDate
{
    private $value;

    public function __construct(? DateTime $dateTime)
    {
        $this->validate($dateTime);
        $this->value = $dateTime;
    }


    public function validate(? DateTime $dateTime): void
    {

    }


    public function value(): ?string
    {
        return $this->value;
    }
}