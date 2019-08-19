<?php

namespace App\Controller;

use App\Entity\Workorder;
use App\Entity\WorkorderTest;
use App\Repository\CQRS\Query\WorkorderQuery;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Routing\Annotation\Route;

class WorkorderController extends BaseController
{
    /**
     * @Route("/workorder", name="workorder")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/WorkorderController.php',
        ]);
    }

    /**
     * @Route("/workorder/view/{id}",methods={"GET"})
     */
    public function view(int $id)
    {
        $workorderQuery = new WorkorderQuery($id);

        /** @var WorkorderTest $workorder */
        $workorder = $this->handleMessage($workorderQuery);

        /** @var Serializer $serializer */
        $serializer = SerializerBuilder::create()->build();

        return $this->json(json_decode($serializer->serialize($workorder, 'json'), true));
    }

}
