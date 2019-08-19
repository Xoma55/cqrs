<?php

namespace App\Repository\CQRS\Query\Handler;

use App\Repository\CQRS\Query\WorkorderListQuery;

class WorkorderListQueryHandler extends AbstractQueryHandler
{
    public function __invoke(WorkorderListQuery $query)
    {
        return $this->repository->findAll();
    }
}
