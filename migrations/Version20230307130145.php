<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307130145 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, reclamation_id INT NOT NULL, note INT NOT NULL, commentaire LONGTEXT NOT NULL, INDEX IDX_1323A5752D6BA2D9 (reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5752D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
        $this->addSql('ALTER TABLE devis CHANGE date date DATE NOT NULL');
        $this->addSql('ALTER TABLE locale DROP nom_entreprise');
        $this->addSql('ALTER TABLE reclamation ADD note INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5752D6BA2D9');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('ALTER TABLE devis CHANGE date date DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL');
        $this->addSql('ALTER TABLE locale ADD nom_entreprise VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reclamation DROP note');
    }
}
