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
    {
        $this->internalName = $internalName;
        $this->displayName = $displayName;
        $this->type = $type;
        $this->presentation = $presentation;
        $this->options = $options;
    }

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

    public function getId(): QuestionId
    {
        return $this->id;
    }

    public function getInternalName(): InternalName
    {
        return $this->internalName;
    }

    public function getDisplayName(): DisplayName
    {
        return $this->displayName;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function getPresentation(): Presentation
    {
        return $this->presentation;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}