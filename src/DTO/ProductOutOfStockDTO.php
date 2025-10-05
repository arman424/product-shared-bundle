<?php
declare(strict_types=1);

namespace Shared\Bundle\DTO;

use Symfony\Component\Uid\Uuid;

final class ProductOutOfStockDTO implements PublishedDTOInterface
{
    public Uuid $orderId;
    public Uuid $productId;
    public int $quantity;

    public static function init(array $orderReservationData): self
    {
        $dto = new self();
        $dto->orderId = $orderReservationData['orderId'];
        $dto->productId = $orderReservationData['productId'];
        $dto->quantity = $orderReservationData['quantity'];

        return $dto;
    }
}