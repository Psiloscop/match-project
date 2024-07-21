<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240721163310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO `Question_questions`
                            (`id`, `internal_name`, `display_name`, `question_type`, `question_presentation`)
                            VALUES
                            (1, 'here_for', 'Here for', 'u_int', 'checkbox');");

        $this->addSql("INSERT INTO `Question_question_options`
                            (`id`, `question_id`, `option_value`, `option_label`, `option_order`) VALUES
                            (1, 1, 1, 'Fun', 1),
                            (2, 1, 2, 'Whatever', 2),
                            (3, 1, 4, 'Dating', 3),
                            (4, 1, 8, 'Friendship', 4);");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('TRUNCATE TABLE Question_questions');
        $this->addSql('TRUNCATE TABLE Question_options');
    }
}
