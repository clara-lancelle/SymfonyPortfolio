<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306133808 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achievement (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, title VARCHAR(255) NOT NULL, start_date DATE NOT NULL, end_date DATE DEFAULT NULL, text LONGTEXT NOT NULL, link VARCHAR(355) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_96737FF112469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE achievement_illustration (achievement_id INT NOT NULL, illustration_id INT NOT NULL, INDEX IDX_B683AA24B3EC99FE (achievement_id), INDEX IDX_B683AA245926566C (illustration_id), PRIMARY KEY(achievement_id, illustration_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE illustration (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, path VARCHAR(355) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE achievement ADD CONSTRAINT FK_96737FF112469DE2 FOREIGN KEY (category_id) REFERENCES project_category (id)');
        $this->addSql('ALTER TABLE achievement_illustration ADD CONSTRAINT FK_B683AA24B3EC99FE FOREIGN KEY (achievement_id) REFERENCES achievement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE achievement_illustration ADD CONSTRAINT FK_B683AA245926566C FOREIGN KEY (illustration_id) REFERENCES illustration (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achievement DROP FOREIGN KEY FK_96737FF112469DE2');
        $this->addSql('ALTER TABLE achievement_illustration DROP FOREIGN KEY FK_B683AA24B3EC99FE');
        $this->addSql('ALTER TABLE achievement_illustration DROP FOREIGN KEY FK_B683AA245926566C');
        $this->addSql('DROP TABLE achievement');
        $this->addSql('DROP TABLE achievement_illustration');
        $this->addSql('DROP TABLE illustration');
        $this->addSql('DROP TABLE project_category');
    }
}
