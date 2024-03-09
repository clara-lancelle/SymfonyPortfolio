<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240309092808 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achievement_skill (achievement_id INT NOT NULL, skill_id INT NOT NULL, INDEX IDX_F15D7E79B3EC99FE (achievement_id), INDEX IDX_F15D7E795585C142 (skill_id), PRIMARY KEY(achievement_id, skill_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE achievement_skill ADD CONSTRAINT FK_F15D7E79B3EC99FE FOREIGN KEY (achievement_id) REFERENCES achievement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE achievement_skill ADD CONSTRAINT FK_F15D7E795585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE achievement CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achievement_skill DROP FOREIGN KEY FK_F15D7E79B3EC99FE');
        $this->addSql('ALTER TABLE achievement_skill DROP FOREIGN KEY FK_F15D7E795585C142');
        $this->addSql('DROP TABLE achievement_skill');
        $this->addSql('ALTER TABLE achievement CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
