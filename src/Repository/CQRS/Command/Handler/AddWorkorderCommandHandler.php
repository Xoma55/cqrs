<?php

namespace App\Repository\CQRS\Command\Handler;

use App\Repository\CQRS\Command\AddWorkorderCommand;
use App\Repository\CQRS\Model\Workorder\Workorder;

class AddWorkorderCommandHandler extends AbstractCommandHandler
{

    public function __invoke(AddWorkorderCommand $command)
    {

        $workorder = new Workorder(
            null,
            $command->getTechnicianId(),
            $command->getDeviceId(),
            $command->getComment(),
            $command->getDateCreate(),
            $command->getDateUpdate()
        );

        return $this->repository->add($workorder);

    }
}
