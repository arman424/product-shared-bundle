<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\ProductDTO;

final class ProductMessage
{
    public function __construct(public ProductDTO $productDTO) {}
}
