<?php

declare(strict_types=1);

namespace App\Question\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use App\Common\Infrastructure\Doctrine\Type\UBigintType;
use App\Question\Domain\ValueObject\ProfileId;

class AnswerIdType extends UBigintType
{
    public const string TYPE = 'answer_id';

    public function convertToPHPValue($value, AbstractPlatform $platform): ProfileId
    {
        return ProfileId::fromInt($value);
    }
}
