<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\PublishedDTOInterface;

final class ProductMessage
{
    public function __construct(public PublishedDTOInterface $publishedDTO) {}
}
