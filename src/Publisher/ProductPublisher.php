<?php

namespace Shared\Bundle\Publisher;

use Shared\Bundle\DTO\PublishedDTOInterface;
use Shared\Bundle\Messaging\ProductMessage;
use Symfony\Component\Messenger\MessageBusInterface;

readonly class ProductPublisher
{
    public function __construct(private MessageBusInterface $messageBus) {}

    public function publish(PublishedDTOInterface $productDTO): void
    {
        $message = new ProductMessage($productDTO);
        $this->messageBus->dispatch($message);
    }
}