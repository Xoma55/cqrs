<?php

namespace App\Repository\CQRS\Model\Workorder;

use App\Entity\WorkorderTest;

interface WorkorderQueryRepository
{
    public function get(string $id);

    /**
     * @param int $page
     * @param int $perPage
     *
     * @return ProductView[]
     */
    public function fetchAll(int $page, int $perPage): array;

    public function count(): int;
}
