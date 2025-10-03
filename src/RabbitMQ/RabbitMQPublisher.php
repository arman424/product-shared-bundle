<?php

namespace Shared\Bundle\RabbitMQ;

use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQPublisher implements PublisherInterface
{
    public function __construct(private RabbitMQConnectionFactory $connectionFactory) {}

    public function publish(string $queue, array $message): void
    {
        $channel = $this->connectionFactory->getChannel();

        $channel->queue_declare($queue, false, true, false, false);

        $msg = new AMQPMessage(json_encode($message), [
            'content_type' => 'application/json',
            'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT
        ]);

        $channel->basic_publish($msg, '', $queue);
    }
}