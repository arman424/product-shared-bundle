<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\PublishedDTOInterface;

class ProductOutOfStockMessage
{
    public function __construct(PublishedDTOInterface $publishedDTO) {}
}