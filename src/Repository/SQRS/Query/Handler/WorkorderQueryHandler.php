<?php

namespace App\Repository\SQRS\Query\Handler;


//use SfCQRSDemo\Application\Query\ProductQuery;

class WorkorderQueryHandler extends AbstractQueryHandler
{
    public function __invoke(ProductQuery $query)
    {
        return $this->repository->get($query->getId());
    }
}
