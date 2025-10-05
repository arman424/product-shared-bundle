<?php

namespace Shared\Bundle\Messaging;

use Shared\Bundle\DTO\PublishedDTOInterface;

class OrderMessage
{
    public function __construct(public PublishedDTOInterface $publishedDTO) {}
}