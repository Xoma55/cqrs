<?php

namespace App\Service\HelpService;

interface HelperInterface
{
    public function superMethod(): string;
}

final class HelperTest implements HelperInterface
{
    public function superMethod(): string
    {
        return 'Super Method';
    }
}

class HelperDecorator implements HelperInterface
{
    /**
     * @var HelperInterface
     */
    private $helper;

    /**
     * HelperDecorator constructor.
     */
    public function __construct(HelperInterface $helper)
    {
        $this->helper = $helper;
    }

    public function superMethod(): string
    {
        return $this->helper->superMethod().'something';
    }
}
