<?php

namespace Shared\Bundle\Publisher;

use Shared\Bundle\DTO\PublishedDTOInterface;

interface PublisherInterface
{
    /**
     * Publish a message to the given queue.
     *
     * @param PublishedDTOInterface $publishedDTO
     */
    public function publish(PublishedDTOInterface $publishedDTO): void;
}