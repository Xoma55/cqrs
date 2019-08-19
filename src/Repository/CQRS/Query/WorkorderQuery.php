<?php

namespace App\Repository\CQRS\Query;


use App\Interfaces\MessageInterface;

class WorkorderQuery implements MessageInterface
{

    private $id;

    /**
     * WorkorderQuery constructor.
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;

    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
