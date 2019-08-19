<?php


namespace App\Repository\CQRS\Persistence\PureSql;

use App\Repository\CQRS\Model\Workorder\WorkorderQueryRepository as WorkorderQueryInterface;
use Doctrine\DBAL\Connection;

class WorkorderQueryRepository implements WorkorderQueryInterface
{

    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function get(string $id)
    {
        $stmt = $this->connection->prepare('SELECT * FROM `workorder_test` WHERE id=:id');
        $stmt->execute([':id' => $id]);
        $data = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function fetchAll(int $page, int $perPage): array
    {
        // TODO: Implement fetchAll() method.
    }

    public function count(): int
    {
        // TODO: Implement count() method.
    }

    public function findAll()
    {
        $stmt = $this->connection->prepare('SELECT * FROM `workorder_test`');
        $stmt->execute();

        $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }
}
