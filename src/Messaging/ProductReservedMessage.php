<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\ProductDTO;

class ProductReservedMessage
{
    public function __construct(
        public string $orderId,
        public int $quantity,
        public ProductDTO $product
    ) {}
}