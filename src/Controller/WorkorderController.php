<?php

namespace App\Controller;

use App\Entity\Workorder;
use App\Entity\WorkorderTest;
use App\Repository\CQRS\Command\AddWorkorderCommand;
use App\Repository\CQRS\Query\WorkorderListQuery;
use App\Repository\CQRS\Query\WorkorderQuery;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/workorder/list", methods={"GET"})
     */
    public function list()
    {

        $workorderListQuery = new WorkorderListQuery();

        $workorderList = $this->handleMessage($workorderListQuery);


        /** @var Serializer $serializer */
        $serializer = SerializerBuilder::create()->build();

        return $this->json(json_decode($serializer->serialize($workorderList, 'json'), true));

    }

    /**
     * @Route("/workorder/create", methods={"POST"})
     */
    public function create(Request $request)
    {

        $params = $request->request->all();

        $parsed = [
            intval($params['technicianId']),
            intval($params['deviceId']),
            $params['comment'],
            \DateTime::createFromFormat('Y-m-d', $params['dateCreate']),
            \DateTime::createFromFormat('Y-m-d', $params['dateUpdate'] ?? date('Y-m-d'))
        ];

        $addWorkorderCommand = new AddWorkorderCommand(...$parsed);
        $workorder = $this->handleMessage($addWorkorderCommand);

        /** @var Serializer $serializer */
        $serializer = SerializerBuilder::create()->build();

        return $this->json(json_decode($serializer->serialize($workorder, 'json'), true));


    }

}
