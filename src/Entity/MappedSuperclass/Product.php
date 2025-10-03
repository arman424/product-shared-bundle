<?php

namespace SharedBundle\Entity\MappedSuperclass;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Uuid;

#[ORM\MappedSuperclass]
abstract class Product
{
    #[ORM\Id]
    #[ORM\Column(type: "uuid", unique: true)]
    protected $id;

    #[ORM\Column(type: "string", length: 255)]
    protected $name;

    #[ORM\Column(type: "integer")]
    protected $price;

    #[ORM\Column(type: "integer")]
    protected $quantity;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function setId(Uuid $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
}
