<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306102731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE skill ADD parent_id INT DEFAULT NULL, ADD text LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477727ACA70 FOREIGN KEY (parent_id) REFERENCES skill (id)');
        $this->addSql('CREATE INDEX IDX_5E3DE477727ACA70 ON skill (parent_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477727ACA70');
        $this->addSql('DROP INDEX IDX_5E3DE477727ACA70 ON skill');
        $this->addSql('ALTER TABLE skill DROP parent_id, DROP text');
    }
}
