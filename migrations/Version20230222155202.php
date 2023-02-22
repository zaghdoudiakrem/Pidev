<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222155202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, num_tel VARCHAR(255) NOT NULL, cin VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat DROP FOREIGN KEY FK_F96EDD98456330C3');
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_6034999399DED506');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B62EA24CB');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641099DED506');
        $this->addSql('ALTER TABLE locale DROP FOREIGN KEY FK_4180C69862EA24CB');
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09C456330C3');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640499DED506');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A99DED506');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC798E52FFD');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D99DED506');
        $this->addSql('DROP TABLE user');
    }
}
