<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230218103653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis_item ADD devis_id INT NOT NULL');
        $this->addSql('ALTER TABLE devis_item ADD CONSTRAINT FK_50C944C141DEFADA FOREIGN KEY (devis_id) REFERENCES devis (id)');
        $this->addSql('CREATE INDEX IDX_50C944C141DEFADA ON devis_item (devis_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis_item DROP FOREIGN KEY FK_50C944C141DEFADA');
        $this->addSql('DROP INDEX IDX_50C944C141DEFADA ON devis_item');
        $this->addSql('ALTER TABLE devis_item DROP devis_id');
    }
}
