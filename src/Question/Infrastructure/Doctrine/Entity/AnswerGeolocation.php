<?php

namespace App\Question\Infrastructure\Doctrine\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table;
use App\Question\Domain\Entity\Profile;
use App\Question\Domain\Entity\Question;
use App\Question\Domain\ValueObject\AnswerId;
use App\Question\Infrastructure\Doctrine\Type\AnswerIdType;
use App\Question\Infrastructure\Doctrine\Repository\DoctrineAnswerGeolocationRepository;


#[Table(name: 'Question_answers_geolocation')]
#[ORM\Entity(repositoryClass: DoctrineAnswerGeolocationRepository::class)]
class AnswerGeolocation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: AnswerIdType::TYPE)]
    private ?AnswerId $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Profile $profile = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Question $question = null;

    #[ORM\Column(type: Types::STRING)]
    private ?string $data = null;

    public function getId(): ?AnswerId
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

    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string|null $data
     */
    public function setData(?string $data): void
    {
        $this->data = $data;
    }
}
