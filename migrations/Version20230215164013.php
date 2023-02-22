<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215164013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locale ADD id_mecanicien_id INT NOT NULL');
        $this->addSql('ALTER TABLE locale ADD CONSTRAINT FK_4180C69862EA24CB FOREIGN KEY (id_mecanicien_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4180C69862EA24CB ON locale (id_mecanicien_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locale DROP FOREIGN KEY FK_4180C69862EA24CB');
        $this->addSql('DROP INDEX IDX_4180C69862EA24CB ON locale');
        $this->addSql('ALTER TABLE locale DROP id_mecanicien_id');
    }
}
