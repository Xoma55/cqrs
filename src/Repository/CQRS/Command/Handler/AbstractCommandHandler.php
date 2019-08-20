<?php

namespace App\Repository\CQRS\Command\Handler;


use App\Repository\CQRS\Model\Workorder\WorkorderRepository;

abstract class AbstractCommandHandler
{

    protected $repository;

    public function __construct(WorkorderRepository $repository)
    {
        $this->repository = $repository;
    }
}
