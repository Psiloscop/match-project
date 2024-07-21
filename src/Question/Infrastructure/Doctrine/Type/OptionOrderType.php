<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\UIntType;
use App\Question\Domain\ValueObject\OptionOrder;

class OptionOrderType extends UIntType
{
    public const string TYPE = 'option_order';

    public function convertToPHPValue($value, AbstractPlatform $platform): ?OptionOrder
    {
        if ( null === $value )
        {
            return null;
        }

        return OptionOrder::fromInt($value);
    }
}
