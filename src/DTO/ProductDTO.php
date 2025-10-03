<?php

namespace Shared\Bundle\DTO;

use JsonSerializable;
use Shared\Bundle\Entity\MappedSuperclass\Product;

final class ProductDTO implements JsonSerializable
{
    public string $id;
    public string $name;
    public float $price;
    public int $quantity;

    public static function fromEntity(Product $product): self
    {
        $dto = new self();
        $dto->id = $product->getId();
        $dto->name = $product->getName();
        $dto->price = $product->getPrice();
        $dto->quantity = $product->getQuantity();
        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
        ];
    }
}