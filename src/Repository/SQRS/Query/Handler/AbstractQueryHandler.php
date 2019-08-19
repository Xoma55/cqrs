<?php


namespace App\Repository\SQRS\Query\Handler;

abstract class AbstractQueryHandler
{
    protected $repository;
    public function __construct(ProductQueryRepository $repository)
    {
        $this->repository = $repository;
    }
}
