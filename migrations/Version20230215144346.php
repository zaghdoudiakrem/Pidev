<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215144346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE constat (id INT AUTO_INCREMENT NOT NULL, nomclient_e VARCHAR(255) DEFAULT NULL, prenomclient_e VARCHAR(255) DEFAULT NULL, typevehicule_e VARCHAR(255) DEFAULT NULL, marquevehicule_e VARCHAR(255) DEFAULT NULL, assuranceclient_e VARCHAR(255) DEFAULT NULL, adresseclient_e VARCHAR(255) DEFAULT NULL, emplacementaccid VARCHAR(255) DEFAULT NULL, photoaccid VARCHAR(255) DEFAULT NULL, descriptiondegat VARCHAR(255) NOT NULL, observations VARCHAR(255) NOT NULL, numcontrat_e VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE constat');
    }
}
