<?php

namespace App\Repository\SQRS\Model\Workorder;

use App\Entity\WorkorderTest;

interface ProductQueryRepository
{
    public function get(string $id): WorkorderTest;

    /**
     * @param int $page
     * @param int $perPage
     *
     * @return ProductView[]
     */
    public function fetchAll(int $page, int $perPage): array;

    public function count(): int;
}
