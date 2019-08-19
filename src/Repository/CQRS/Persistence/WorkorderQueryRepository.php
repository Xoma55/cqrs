<?php


namespace App\Repository\CQRS\Persistence;

use App\Entity\WorkorderTest;
use App\Repository\CQRS\Model\Workorder\WorkorderQueryRepository as WorkorderQueryPort;
use Doctrine\ORM\EntityManagerInterface;

class WorkorderQueryRepository implements WorkorderQueryPort
{

    protected $connection;
    protected $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function get(string $id)
    {
        $workorderRepository = $this->entityManager->getRepository(WorkorderTest::class);

        return $workorderRepository->find($id) ?? new NullWorkorderTest();

    }

    public function fetchAll(int $page, int $perPage): array
    {
        // TODO: Implement fetchAll() method.
    }

    public function count(): int
    {
        // TODO: Implement count() method.
    }

}
