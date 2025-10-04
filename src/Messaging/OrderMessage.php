<?php

namespace Shared\Bundle\Messaging;

class OrderMessage
{
    public function __construct(
        public string $orderId,
        public string $productId,
        public int $quantity
    ) {}
}