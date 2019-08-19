<?php


namespace App\Repository\CQRS\Query\Handler;

use App\Repository\CQRS\Model\Workorder\WorkorderQueryRepository;


abstract class AbstractQueryHandler
{

    protected $repository;

    public function __construct(WorkorderQueryRepository $repository)
    {
        $this->repository = $repository;
    }
}
