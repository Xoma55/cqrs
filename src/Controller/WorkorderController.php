<?php

namespace App\Controller;

use App\Entity\Workorder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WorkorderController extends AbstractController
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

        $entityManager = $this->getDoctrine()->getManager();

        $workorderRepository = $entityManager->getRepository(Workorder::class);

        $workorder = $workorderRepository->find($id);


        return $this->json([
            'workorder' => $workorder->getAccountId()
        ]);
    }

}
