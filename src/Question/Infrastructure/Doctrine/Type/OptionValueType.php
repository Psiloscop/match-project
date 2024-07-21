<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\UIntType;
use App\Question\Domain\ValueObject\OptionValue;

class OptionValueType extends UIntType
{
    public const string TYPE = 'option_value';

    public function convertToPHPValue($value, AbstractPlatform $platform): ?OptionValue
    {
        if ( null === $value )
        {
            return null;
        }

        return OptionValue::fromInt($value);
    }
}
