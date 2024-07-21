<?php

declare(strict_types=1);

namespace App\Common\Infrastructure\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\IntegerType as DoctrineIntegerType;

abstract class UIntType extends DoctrineIntegerType
{
    protected const string TYPE = 'u_int';

    public function requiresSQLCommentHint(AbstractPlatform $platform): bool
    {
        return true;
    }

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        $column['unsigned'] = true;

        return $platform->getIntegerTypeDeclarationSQL($column);
    }

    public function getName(): string
    {
        return static::TYPE;
    }
}
