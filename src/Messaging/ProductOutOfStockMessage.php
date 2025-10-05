<?php
declare(strict_types=1);

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\ProductOutOfStockDTO;

final class ProductOutOfStockMessage
{
    public function __construct(public ProductOutOfStockDTO $productOutOfStockDTO) {}
}