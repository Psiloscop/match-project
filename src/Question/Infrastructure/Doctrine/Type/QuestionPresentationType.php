<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\EnumType;
use App\Question\Domain\ValueObject\Presentation;

class QuestionPresentationType extends EnumType
{
    public const string TYPE = 'question_presentation';

    public function getName(): string
    {
        return self::TYPE;
    }

    public function getEnum(): string
    {
        return Presentation::class;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform): ?Presentation
    {
        if ( null === $value )
        {
            return null;
        }

        return Presentation::tryFrom($value);
    }
}
