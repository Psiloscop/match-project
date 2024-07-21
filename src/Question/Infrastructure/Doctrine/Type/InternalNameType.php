<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\StringType;
use App\Question\Domain\ValueObject\InternalName;

class InternalNameType extends StringType
{
    public const string TYPE = 'internal_name';

    public function convertToPHPValue($value, AbstractPlatform $platform): ?InternalName
    {
        if ( null === $value )
        {
            return null;
        }


        return InternalName::fromString($value);
    }
}
