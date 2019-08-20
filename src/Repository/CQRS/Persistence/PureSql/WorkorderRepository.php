<?php

namespace App\Repository\CQRS\Persistence\PureSql;

use App\Repository\CQRS\Model\Workorder\Workorder;
use App\Repository\CQRS\Model\Workorder\WorkorderRepository as WorkorderInterface;
use Doctrine\DBAL\Connection;

class WorkorderRepository implements WorkorderInterface
{

    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function add(Workorder $model)
    {
        $sql = "INSERT INTO workorder_test (technician_id, device_id, comment, date_create, date_update) 
                VALUE (:technicianId, :deviceId, :comment, :dateCreate, :dateUpdate)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            ':technicianId' => $model->getTechnicianId(),
            ':deviceId' => $model->getDeviceId(),
            ':comment' => $model->getComment(),
            ':dateCreate' => $model->getDateCreate()->format('Y-m-d H:i:s'),
            ':dateUpdate' => $model->getDateUpdate()->format('Y-m-d H:i:s'),
        ]);

        $id = $this->connection->lastInsertId();
        $stmt = $this->connection->prepare("SELECT * FROM workorder_test WHERE id=:id");
        $stmt->execute([':id' => $id]);
        $data = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $data;
    }

}
