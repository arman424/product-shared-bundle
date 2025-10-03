<?php

namespace SharedBundle\RabbitMQ;

interface PublisherInterface
{
    /**
     * Publish a message to the given queue.
     *
     * @param string $queue
     * @param array $message
     */
    public function publish(string $queue, array $message): void;
}

