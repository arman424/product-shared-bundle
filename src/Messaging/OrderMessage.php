<?php
declare(strict_types=1);

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\OrderReservationDTO;

final class OrderMessage
{
    public function __construct(public OrderReservationDTO $orderReservationDTO) {}
}