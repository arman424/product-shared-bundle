<?php
declare(strict_types=1);

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\ProductDTO;

final class ProductMessage
{
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly float $price,
        public readonly int $quantity
    ) {}

    public static function fromDTO(ProductDTO $dto): self
    {
        return new self(
            $dto->id,
            $dto->name,
            $dto->price,
            $dto->quantity
        );
    }
}