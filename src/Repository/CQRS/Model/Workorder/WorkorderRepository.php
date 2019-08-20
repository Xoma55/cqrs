<?php

namespace App\Repository\CQRS\Model\Workorder;


use App\Entity\WorkorderTest;

interface WorkorderRepository
{

    public function add(Workorder $model);

}
