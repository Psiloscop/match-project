<?php

declare(strict_types=1);

namespace App\Common\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Types\BigIntType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

abstract class UBigintType extends BigIntType
{
    protected const string TYPE = 'u_bigint';

    public function requiresSQLCommentHint(AbstractPlatform $platform): bool
    {
        return true;
    }

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return $platform->getBigIntTypeDeclarationSQL($column) . ' UNSIGNED';
    }

    public function getName(): string
    {
        return static::TYPE;
    }
}
