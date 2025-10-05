<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\ProductOutOfStockDTO;

final class ProductOutOfStockMessage
{
    public function __construct(public ProductOutOfStockDTO $productOutOfStockDTO) {}
}