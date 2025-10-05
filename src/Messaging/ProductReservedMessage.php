<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\PublishedDTOInterface;

class ProductReservedMessage
{
    public function __construct(public PublishedDTOInterface $publishedDTO) {}
}