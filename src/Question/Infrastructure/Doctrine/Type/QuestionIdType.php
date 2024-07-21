<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\UBigintType;
use App\Question\Domain\ValueObject\QuestionId;

class QuestionIdType extends UBigintType
{
    public const string TYPE = 'question_id';

    public function convertToPHPValue($value, AbstractPlatform $platform): QuestionId
    {
        return QuestionId::fromInt($value);
    }
}
