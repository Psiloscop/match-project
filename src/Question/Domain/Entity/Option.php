<?php

namespace App\Question\Domain\Entity;

use App\Question\Domain\ValueObject\OptionId;
use App\Question\Domain\ValueObject\OptionLabel;
use App\Question\Domain\ValueObject\OptionValue;
use App\Question\Domain\ValueObject\OptionOrder;

class Option
{
    private OptionId $id;

    private OptionValue $value;

    private OptionLabel $label;

    private OptionOrder $order;

    private Question $question;

    private function __construct(
        OptionValue $value,
        OptionLabel $label,
        OptionOrder $order,
        Question $question,
    )
    {
        $this->value = $value;
        $this->label = $label;
        $this->order = $order;
        $this->question = $question;
    }

    public static function create(
        OptionValue $value,
        OptionLabel $label,
        OptionOrder $order,
        Question $question,
    ): Option {
        return new self(
            $value,
            $label,
            $order,
            $question,
        );
    }

    public function id(): OptionId
    {
        return $this->id;
    }

    public function value(): OptionValue
    {
        return $this->value;
    }

    public function label(): OptionLabel
    {
        return $this->label;
    }

    public function order(): OptionOrder
    {
        return $this->order;
    }

    public function question(): Question
    {
        return $this->question;
    }
}