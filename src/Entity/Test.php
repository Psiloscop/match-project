<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $one = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOne(): ?string
    {
        return $this->one;
    }

    public function setOne(string $one): static
    {
        $this->one = $one;

        return $this;
    }
}