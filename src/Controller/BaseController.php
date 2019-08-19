<?php


namespace App\Controller;

use App\Interfaces\MessageInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

class BaseController extends AbstractController
{

    use HandleTrait;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    /**
     * @param object $message
     * @return mixed
     */
    protected function handleMessage(MessageInterface $message)
    {
        return $this->handle($message);
    }

}
