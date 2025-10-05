<?php
declare(strict_types=1);

namespace Shared\Bundle\DTO;

final class ProductOutOfStockDTO implements PublishedDTOInterface
{
    public string $orderId;
    public int $quantity;

    public static function init(array $orderReservationData): self
    {
        $dto = new self();
        $dto->orderId = $orderReservationData['orderId'];
        $dto->quantity = $orderReservationData['quantity'];

        return $dto;
    }
}