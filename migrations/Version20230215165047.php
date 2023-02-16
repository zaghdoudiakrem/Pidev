<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215165047 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat ADD id_expert_id INT NOT NULL');
        $this->addSql('ALTER TABLE constat ADD CONSTRAINT FK_F96EDD98456330C3 FOREIGN KEY (id_expert_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F96EDD98456330C3 ON constat (id_expert_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat DROP FOREIGN KEY FK_F96EDD98456330C3');
        $this->addSql('DROP INDEX IDX_F96EDD98456330C3 ON constat');
        $this->addSql('ALTER TABLE constat DROP id_expert_id');
    }
}
