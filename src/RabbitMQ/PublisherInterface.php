<?php

namespace Shared\Bundle\RabbitMQ;

use Shared\Bundle\DTO\ProductDTO;

interface PublisherInterface
{
    /**
     * Publish a message to the given queue.
     *
     * @param string $queue
     * @param ProductDTO $productDTO
     */
    public function publish(string $queue, ProductDTO $productDTO): void;
}