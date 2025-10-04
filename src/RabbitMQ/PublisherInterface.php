<?php

namespace Shared\Bundle\RabbitMQ;

use Shared\Bundle\DTO\ProductDTO;

interface PublisherInterface
{
    /**
     * Publish a message to the given queue.
     *
     * @param ProductDTO $productDTO
     */
    public function publish(ProductDTO $productDTO): void;
}