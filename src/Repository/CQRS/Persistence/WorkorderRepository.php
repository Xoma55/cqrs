<?php

namespace App\Repository\CQRS\Persistence;

use App\Entity\WorkorderTest;
use App\Repository\CQRS\Model\Workorder\Workorder;
use App\Repository\CQRS\Model\Workorder\WorkorderRepository as WorkorderPort;
use Doctrine\ORM\EntityManagerInterface;

class WorkorderRepository implements WorkorderPort
{

    /** @var EntityManagerInterface */
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param Workorder $model
     * @return WorkorderTest
     */
    public function add(Workorder $model): WorkorderTest
    {

        $workorder = new WorkorderTest();
        $workorder->setTechnicianId($model->getTechnicianId());
        $workorder->setDeviceId($model->getDeviceId());
        $workorder->setComment($model->getComment());
        $workorder->setDateCreate($model->getDateCreate());
        $workorder->setDateUpdate($model->getDateUpdate());

        $this->entityManager->persist($workorder);
        $this->entityManager->flush();

        return $workorder;
    }

}
