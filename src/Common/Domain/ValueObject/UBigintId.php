<?php

namespace App\Common\Domain\ValueObject;

use InvalidArgumentException;

class UBigintId extends IntegerValue
{
    public function __construct(int $value)
    {
        static::ensureIsValidValue($value);

        parent::__construct($value);
    }

    protected static function ensureIsValidValue(int $value): void
    {
        if ( $value <= 0 )
        {
            throw new InvalidArgumentException('Value must be a positive integer');
        }
    }
}