<?php

namespace App\Question\Domain\ValueObject;

use InvalidArgumentException;
use App\Common\Domain\ValueObject\StringValue;

class InternalName extends StringValue
{
    public function __construct(string $value)
    {
        static::ensureIsValidValue($value);

        parent::__construct($value);
    }

    protected static function ensureIsValidValue(string $value): void
    {
        $result = preg_match('/[^a-z0-9_-]/i', $value);

        if ( $result === 1 || $result === false )
        {
            throw new InvalidArgumentException('Value must contain only A-Z, a-z, 0-9, _ and - characters.');
        }
    }
}