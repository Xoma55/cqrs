<?php

namespace App\Repository\SQRS\Query;


class WorkorderQuery
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
