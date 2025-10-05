<?php

namespace Shared\Bundle\Messaging;

class ProductOutOfStockMessage
{
    public function __construct(
        public string $orderId,
        public string $productId,
    ) {}
}