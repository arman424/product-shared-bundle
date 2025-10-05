<?php

namespace Shared\Bundle\Messaging;

class ProductReservedMessage
{
    public function __construct(
        public string $orderId,
        public string $productId,
        public int $quantity,
    ) {}
}