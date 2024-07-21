<?php

declare(strict_types=1);

namespace App\Common\Infrastructure\Doctrine\EventListener;

use Doctrine\DBAL\Schema\Column;
use Doctrine\ORM\Tools\Event\GenerateSchemaEventArgs;
use App\Common\Infrastructure\Doctrine\Type\EnumType;

class EnumTypeListener
{
    public function postGenerateSchema(GenerateSchemaEventArgs $eventArgs): void
    {
        $columns = [];

        foreach ( $eventArgs->getSchema()->getTables() as $table )
        {
            foreach ( $table->getColumns() as $column )
            {
                if ( $column->getType() instanceof EnumType )
                {
                    $columns[] = $column;
                }
            }
        }

        /**
         * @var Column $column
         */
        foreach ( $columns as $column )
        {
            /**
             * @var EnumType $type
             */
            $type = $column->getType();
            $enum = $type->getEnum();

            $cases = array_map(
                fn ($enumItem) => "'{$enumItem->value}'",
                $enum::cases()
            );

            $hash = md5(implode(',', $cases));

            $column->setComment(trim(sprintf(
                '%s (DC2Enum:%s)',
                $column->getComment(),
                $hash
            )));
        }
    }
}