<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210708195106 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE football_match (id INT AUTO_INCREMENT NOT NULL, teams_id INT DEFAULT NULL, scores_id INT DEFAULT NULL, date DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8CE33ACED6365F12 (teams_id), UNIQUE INDEX UNIQ_8CE33ACEFB0F374D (scores_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE scores (id INT AUTO_INCREMENT NOT NULL, domicile INT DEFAULT NULL, exterieur INT DEFAULT NULL, tireaubut TINYINT(1) DEFAULT NULL, winner VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teams (id INT AUTO_INCREMENT NOT NULL, domicile VARCHAR(255) NOT NULL, exterieur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE football_match ADD CONSTRAINT FK_8CE33ACED6365F12 FOREIGN KEY (teams_id) REFERENCES teams (id)');
        $this->addSql('ALTER TABLE football_match ADD CONSTRAINT FK_8CE33ACEFB0F374D FOREIGN KEY (scores_id) REFERENCES scores (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE football_match DROP FOREIGN KEY FK_8CE33ACEFB0F374D');
        $this->addSql('ALTER TABLE football_match DROP FOREIGN KEY FK_8CE33ACED6365F12');
        $this->addSql('DROP TABLE football_match');
        $this->addSql('DROP TABLE scores');
        $this->addSql('DROP TABLE teams');
    }
}
