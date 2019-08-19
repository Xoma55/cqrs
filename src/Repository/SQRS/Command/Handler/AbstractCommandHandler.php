<?php

namespace App\Repository\SQRS\Command\Handler;

use App\Entity\WorkorderTest;
use SfCQRSDemo\Model\Product\ProductRepository;
abstract class AbstractCommandHandler
{
    /**
     * @var WorkorderTest
     */
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
}
