<?php

namespace Shared\Bundle\RabbitMQ;

use Exception;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Channel\AMQPChannel;

class RabbitMQConnectionFactory
{
    private AMQPStreamConnection $connection;
    private AMQPChannel $channel;

    /**
     * @throws Exception
     */
    public function __construct(
        private string $host,
        private int $port,
        private string $user,
        private string $password,
        private string $vhost = '/'
    ) {
        $this->connection = new AMQPStreamConnection($host, $port, $user, $password, $vhost);
        $this->channel = $this->connection->channel();
    }

    public function getChannel(): AMQPChannel
    {
        return $this->channel;
    }

    /**
     * @throws Exception
     */
    public function close(): void
    {
        $this->channel->close();
        $this->connection->close();
    }
}