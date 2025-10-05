<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\ProductOutOfStockDTO;

class ProductOutOfStockMessage
{
    public function __construct(public ProductOutOfStockDTO $orderReservationDTO) {}
}