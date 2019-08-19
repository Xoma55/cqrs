<?php


namespace App\Repository\CQRS\Persistence;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\ParameterType;
use App\Entity\WorkorderTest;
use App\Repository\CQRS\Model\Workorder\WorkorderQueryRepository as WorkorderQueryPort;
use Doctrine\ORM\EntityManagerInterface;

class WorkorderQueryRepository implements WorkorderQueryPort
{

    protected $connection;
    protected $productViewMapper;
    protected $entityManager;


    //public function __construct(Connection $connection, ProductViewMapper $productViewMapper)
    public function __construct(Connection $connection, EntityManagerInterface $entityManager)
    {
        $this->connection = $connection;
        $this->entityManager = $entityManager;
        //$this->productViewMapper = $productViewMapper;
    }


    public function get(string $id): WorkorderTest
    {
//        $stmt = $this->connection->prepare('SELECT * FROM `workorder_test` WHERE id=:id');
//        $stmt->execute([':id' => $id]);
//        $data = $stmt->fetch(\PDO::FETCH_ASSOC);
//        //return $this->productViewMapper->map($data);
//        return $data;

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
