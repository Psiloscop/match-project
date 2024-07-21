<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\StringType;
use App\Question\Domain\ValueObject\OptionLabel;

class OptionLabelType extends StringType
{
    public const string TYPE = 'option_label';

    public function convertToPHPValue($value, AbstractPlatform $platform): ?OptionLabel
    {
        if ( null === $value )
        {
            return null;
        }

        return OptionLabel::fromString($value);
    }
}
