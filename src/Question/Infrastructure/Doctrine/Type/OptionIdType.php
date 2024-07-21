<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\UBigintType;
use App\Question\Domain\ValueObject\OptionId;

class OptionIdType extends UBigintType
{
    public const string TYPE = 'option_id';

    public function convertToPHPValue($value, AbstractPlatform $platform): OptionId
    {
        return OptionId::fromInt($value);
    }
}
