<?php

namespace Shared\Bundle\RabbitMQ;

use Shared\Bundle\DTO\ProductDTO;

interface PublisherInterface
{
    /**
     * Publish a message to the given queue.
     *
     * @param string $queue
     * @param array $message
     */
    public function publish(string $queue, ProductDTO $message): void;
}