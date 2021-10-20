<?php

namespace Src\Bmanagerbowl\User\Application;

use Src\Bmanagerbowl\User\Domain\Contracts\UserRepositoryContract;
use Src\Bmanagerbowl\User\Domain\ValueObjects\UserId;

final class DeleteUserUseCase
{
    /**
     * @var \Src\Bmanagerbowl\User\Application\UserRepositoryContract
     */
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $userId): void
    {
        $id = new UserId($userId);

        $this->repository->delete($id);
    }

}