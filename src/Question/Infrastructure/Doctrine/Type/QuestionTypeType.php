<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\EnumType;
use App\Question\Domain\ValueObject\Type;

class QuestionTypeType extends EnumType
{
    public const string TYPE = 'question_type';

    public function getName(): string
    {
        return self::TYPE;
    }

    public function getEnum(): string
    {
        return Type::class;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform): ?Type
    {
        if ( null === $value )
        {
            return null;
        }

        return Type::tryFrom($value);
    }
}
