<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\ProductDTO;

class ProductOutOfStockMessage
{
    public function __construct(
        public string $orderId,
        public ProductDTO $product
    ) {}
}