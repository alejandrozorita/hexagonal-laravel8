<?php

namespace Src\Bmanagerbowl\User\Domain\ValueObjects;

use http\Exception\InvalidArgumentException;

final class UserEmail
{

    private $value;

    public function __construct(string $email)
    {
        $this->validate($email);
        $this->value = $email;
    }


    public function validate(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
              sprintf('<%s> does not allow the validad email: <%s>.'. static::class, $email)
            );
        }
    }


    public function value(): string
    {
        return $this->value;
    }
}