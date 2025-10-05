<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\OrderReservationDTO;

class ProductReservedMessage
{
    public function __construct(public OrderReservationDTO $orderReservationDTO) {}
}