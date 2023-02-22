<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215161825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD id_client_id INT NOT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_6034999399DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6034999399DED506 ON contrat (id_client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_6034999399DED506');
        $this->addSql('DROP INDEX IDX_6034999399DED506 ON contrat');
        $this->addSql('ALTER TABLE contrat DROP id_client_id');
    }
}
