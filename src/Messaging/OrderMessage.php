<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\OrderReservationDTO;

class OrderMessage
{
    public function __construct(public OrderReservationDTO $orderReservationDTO) {}
}