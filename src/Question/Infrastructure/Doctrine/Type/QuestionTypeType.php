<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\StringType;
use App\Question\Domain\ValueObject\Type;

class QuestionTypeType extends StringType
{
    public const string TYPE = 'question_type';

    public function convertToPHPValue($value, AbstractPlatform $platform): ?Type
    {
        if ( null === $value )
        {
            return null;
        }

        return Type::tryFrom($value);
    }
}
