<?php

namespace SharedBundle\RabbitMQ;

class RabbitMQPublisher implements PublisherInterface
{

    public function publish(string $queue, array $message): void
    {
        // TODO: Implement publish() method.
    }
}