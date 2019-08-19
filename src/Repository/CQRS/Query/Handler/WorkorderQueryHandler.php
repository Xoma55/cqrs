<?php

namespace App\Repository\CQRS\Query\Handler;


use App\Repository\CQRS\Query\WorkorderQuery;

class WorkorderQueryHandler extends AbstractQueryHandler
{
    public function __invoke(WorkorderQuery $query)
    {
        return $this->repository->get($query->getId());
    }
}
