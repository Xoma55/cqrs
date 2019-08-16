<?php

namespace App\Controller;

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
    }

}
