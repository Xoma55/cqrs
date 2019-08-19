<?php

namespace App\Repository\CQRS\Command;

use SfCQRSDemo\Application\Command\AddProductCommand;
use SfCQRSDemo\Model\Product\Product;
use SfCQRSDemo\Model\Product\ProductId;
class AddProductHandler extends AbstractCommandHandler
{
    public function __invoke(AddProductCommand $command)
    {
        $newProduct = Product::create(
            $command->getProductId(),
            $command->getName(),
            $command->getPrice(),
            $command->getDescription()
        );
        $this->productRepository->add($newProduct);
    }
}
