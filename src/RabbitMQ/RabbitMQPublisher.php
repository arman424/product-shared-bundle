<?php

namespace Shared\Bundle\RabbitMQ;

use Shared\Bundle\DTO\ProductDTO;
use Shared\Bundle\Messaging\ProductMessage;
use Symfony\Component\Messenger\MessageBusInterface;

readonly class RabbitMQPublisher implements PublisherInterface
{
    public function __construct(private MessageBusInterface $messageBus) {}

    public function publish(ProductDTO $productDTO): void
    {
        $message = new ProductMessage($productDTO);
        $this->messageBus->dispatch($message);
    }
}