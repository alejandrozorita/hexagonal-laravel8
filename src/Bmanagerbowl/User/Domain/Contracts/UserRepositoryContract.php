<?php

namespace Src\Bmanagerbowl\User\Domain\Contracts;

use Src\Bmanagerbowl\User\Domain\User;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserEmail;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserId;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserName;

interface UserRepositoryContract
{
    public function find(UserId $id): ?User;

    public function findByCriteria(UserName $userName, UserEmail $userEmail): ?User;

    public function save(User $user): void;

    public function update(UserId $userId, User $user): void;

    public function delete(UserId $id): void;
}