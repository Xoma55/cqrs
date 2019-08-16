<?php

namespace App\Service;

class UnusedService
{
    public function doNothing()
    {
        $c = 1;

        return null;
    }
}

class A
{
    /**
     * @var B
     */
    private $obj;

    /**
     * A constructor.
     */
    public function __construct(B $obj)
    {
        $this->obj = $obj;
    }
}

class B
{
    /**
     * @var A
     */
    private $obj;

    /**
     * B constructor.
     */
    public function __construct(A $obj)
    {
        $this->obj = $obj;
    }
}
