<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215164819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis ADD id_mecanicien_id INT NOT NULL, ADD id_expert INT NOT NULL');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B62EA24CB FOREIGN KEY (id_mecanicien_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8B27C52B62EA24CB ON devis (id_mecanicien_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B62EA24CB');
        $this->addSql('DROP INDEX IDX_8B27C52B62EA24CB ON devis');
        $this->addSql('ALTER TABLE devis DROP id_mecanicien_id, DROP id_expert');
    }
}
