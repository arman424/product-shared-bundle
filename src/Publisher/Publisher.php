<?php
declare(strict_types=1);

namespace Shared\Bundle\Publisher;

use Shared\Bundle\DTO\PublishedDTOInterface;
use Symfony\Component\Messenger\MessageBusInterface;

abstract class Publisher
{
    public function __construct(protected MessageBusInterface $messageBus) {}

    /**
     * Publish a message to the given queue.
     *
     * @param PublishedDTOInterface $publishedDTO
     */
    abstract public function publish(PublishedDTOInterface $publishedDTO): void;
}