<?php

namespace App\Question\Infrastructure\Doctrine\Entity;

use App\Question\Domain\Entity\Profile;
use App\Question\Domain\Entity\Question;
use App\Question\Infrastructure\Doctrine\Repository\DoctrineAnswerUIntRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DoctrineAnswerUIntRepository::class)]
class AnswerUInt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::BIGINT, options: ['unsigned' => true])]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Profile $profile = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Question $question = null;

    #[ORM\Column(type: Types::INTEGER, options: ['unsigned' => true])]
    private ?int $data = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProfile(): ?Profile
    {
        return $this->profile;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function getData(): ?int
    {
        return $this->data;
    }

    /**
     * @param int|null $data
     */
    public function setData(?int $data): void
    {
        // TODO: throw exception if data is negative

        $this->data = $data;
    }
}
