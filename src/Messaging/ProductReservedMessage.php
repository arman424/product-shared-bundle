<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\OrderReservationDTO;

final class ProductReservedMessage
{
    public function __construct(public OrderReservationDTO $orderReservationDTO) {}
}