<?php

namespace App\Question\Domain\Entity;

use App\Question\Domain\ValueObject\DisplayName;
use App\Question\Domain\ValueObject\InternalName;
use App\Question\Domain\ValueObject\Presentation;
use App\Question\Domain\ValueObject\QuestionId;
use App\Question\Domain\ValueObject\Type;

//use Doctrine\Common\Collections\ArrayCollection;
//use Doctrine\Common\Collections\Collection;

class Question
{
    private QuestionId $id;

    private InternalName $internalName;

    private DisplayName $displayName;

    private Type $type;

    private Presentation $presentation;

//    /**
//     * @var Collection<int, Option>
//     */
    private array $options;

    private function __construct(
        InternalName $internalName,
        DisplayName $displayName,
        Type $type,
        Presentation $presentation,
        array $options
    )
    {}

    public static function create(
        InternalName $internalName,
        DisplayName $displayName,
        Type $type,
        Presentation $presentation,
        array $options
    ): Question {
        return new self(
            $internalName,
            $displayName,
            $type,
            $presentation,
            $options,
        );
    }

    public function id(): QuestionId
    {
        return $this->id;
    }

    public function internalName(): InternalName
    {
        return $this->internalName;
    }

    public function displayName(): DisplayName
    {
        return $this->displayName;
    }

    public function type(): Type
    {
        return $this->type;
    }

    public function presentation(): Presentation
    {
        return $this->presentation;
    }

    public function options(): array
    {
        return $this->options;
    }
}