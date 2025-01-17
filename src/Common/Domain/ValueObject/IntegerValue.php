<?php

declare(strict_types=1);

namespace App\Common\Domain\ValueObject;

abstract class IntegerValue
{
    protected function __construct(
        protected int $value
    )
    {}

    public static function fromInt(int $value): static
    {
        return new static($value);
    }

    public function value(): int
    {
        return $this->value;
    }
}
