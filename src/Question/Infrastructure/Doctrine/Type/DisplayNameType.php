<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\StringType;
use App\Question\Domain\ValueObject\DisplayName;

class DisplayNameType extends StringType
{
    public const string TYPE = 'display_name';

    public function convertToPHPValue($value, AbstractPlatform $platform): ?DisplayName
    {
        if ( null === $value )
        {
            return null;
        }

        return DisplayName::fromString($value);
    }
}
