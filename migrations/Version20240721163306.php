<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240721163306 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Question_answers_bool (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL COMMENT \'(DC2Type:answer_id)\', profile_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:profile_id)\', question_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:question_id)\', data TINYINT(1) NOT NULL, INDEX IDX_E7D2B40DCCFA12B8 (profile_id), INDEX IDX_E7D2B40D1E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Question_answers_geolocation (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL COMMENT \'(DC2Type:answer_id)\', profile_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:profile_id)\', question_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:question_id)\', data VARCHAR(255) NOT NULL, INDEX IDX_1FF065B8CCFA12B8 (profile_id), INDEX IDX_1FF065B81E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Question_answers_string50 (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL COMMENT \'(DC2Type:answer_id)\', profile_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:profile_id)\', question_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:question_id)\', data VARCHAR(50) NOT NULL, INDEX IDX_2CF04970CCFA12B8 (profile_id), INDEX IDX_2CF049701E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Question_answers_uint (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL COMMENT \'(DC2Type:answer_id)\', profile_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:profile_id)\', question_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:question_id)\', data BIGINT NOT NULL, INDEX IDX_24E60E8ECCFA12B8 (profile_id), INDEX IDX_24E60E8E1E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Question_profiles (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL COMMENT \'(DC2Type:profile_id)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Question_question_options (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL COMMENT \'(DC2Type:option_id)\', question_id BIGINT UNSIGNED NOT NULL COMMENT \'(DC2Type:question_id)\', option_value INT UNSIGNED NOT NULL COMMENT \'(DC2Type:option_value)\', option_label VARCHAR(255) NOT NULL COMMENT \'(DC2Type:option_label)\', option_order INT UNSIGNED NOT NULL COMMENT \'(DC2Type:option_order)\', INDEX IDX_2BDCB4591E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Question_questions (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL COMMENT \'(DC2Type:question_id)\', internal_name VARCHAR(255) NOT NULL COMMENT \'(DC2Type:internal_name)\', display_name VARCHAR(255) NOT NULL COMMENT \'(DC2Type:display_name)\', question_type ENUM(\'u_int\', \'u_bigint\', \'string_50\', \'datetime\', \'bool\') NOT NULL COMMENT \'(DC2Enum:9ea5fae831c18ee180d31218538002bf)(DC2Type:question_type)\', question_presentation ENUM(\'text\', \'textarea\', \'select\', \'radio\', \'checkbox\', \'date\') NOT NULL COMMENT \'(DC2Enum:b04ef34daee8efa3edc80af7e6978802)(DC2Type:question_presentation)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Question_answers_bool ADD CONSTRAINT FK_E7D2B40DCCFA12B8 FOREIGN KEY (profile_id) REFERENCES Question_profiles (id)');
        $this->addSql('ALTER TABLE Question_answers_bool ADD CONSTRAINT FK_E7D2B40D1E27F6BF FOREIGN KEY (question_id) REFERENCES Question_questions (id)');
        $this->addSql('ALTER TABLE Question_answers_geolocation ADD CONSTRAINT FK_1FF065B8CCFA12B8 FOREIGN KEY (profile_id) REFERENCES Question_profiles (id)');
        $this->addSql('ALTER TABLE Question_answers_geolocation ADD CONSTRAINT FK_1FF065B81E27F6BF FOREIGN KEY (question_id) REFERENCES Question_questions (id)');
        $this->addSql('ALTER TABLE Question_answers_string50 ADD CONSTRAINT FK_2CF04970CCFA12B8 FOREIGN KEY (profile_id) REFERENCES Question_profiles (id)');
        $this->addSql('ALTER TABLE Question_answers_string50 ADD CONSTRAINT FK_2CF049701E27F6BF FOREIGN KEY (question_id) REFERENCES Question_questions (id)');
        $this->addSql('ALTER TABLE Question_answers_uint ADD CONSTRAINT FK_24E60E8ECCFA12B8 FOREIGN KEY (profile_id) REFERENCES Question_profiles (id)');
        $this->addSql('ALTER TABLE Question_answers_uint ADD CONSTRAINT FK_24E60E8E1E27F6BF FOREIGN KEY (question_id) REFERENCES Question_questions (id)');
        $this->addSql('ALTER TABLE Question_question_options ADD CONSTRAINT FK_2BDCB4591E27F6BF FOREIGN KEY (question_id) REFERENCES Question_questions (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Question_answers_bool DROP FOREIGN KEY FK_E7D2B40DCCFA12B8');
        $this->addSql('ALTER TABLE Question_answers_bool DROP FOREIGN KEY FK_E7D2B40D1E27F6BF');
        $this->addSql('ALTER TABLE Question_answers_geolocation DROP FOREIGN KEY FK_1FF065B8CCFA12B8');
        $this->addSql('ALTER TABLE Question_answers_geolocation DROP FOREIGN KEY FK_1FF065B81E27F6BF');
        $this->addSql('ALTER TABLE Question_answers_string50 DROP FOREIGN KEY FK_2CF04970CCFA12B8');
        $this->addSql('ALTER TABLE Question_answers_string50 DROP FOREIGN KEY FK_2CF049701E27F6BF');
        $this->addSql('ALTER TABLE Question_answers_uint DROP FOREIGN KEY FK_24E60E8ECCFA12B8');
        $this->addSql('ALTER TABLE Question_answers_uint DROP FOREIGN KEY FK_24E60E8E1E27F6BF');
        $this->addSql('ALTER TABLE Question_question_options DROP FOREIGN KEY FK_2BDCB4591E27F6BF');
        $this->addSql('DROP TABLE Question_answers_bool');
        $this->addSql('DROP TABLE Question_answers_geolocation');
        $this->addSql('DROP TABLE Question_answers_string50');
        $this->addSql('DROP TABLE Question_answers_uint');
        $this->addSql('DROP TABLE Question_profiles');
        $this->addSql('DROP TABLE Question_question_options');
        $this->addSql('DROP TABLE Question_questions');
    }
}
