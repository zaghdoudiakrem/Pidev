<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230217121718 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat CHANGE id_expert_id id_expert_id INT NOT NULL, CHANGE id_vehicule_id id_vehicule_id INT NOT NULL, CHANGE photoaccid photoaccid VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule CHANGE id_client_id id_client_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat CHANGE id_expert_id id_expert_id INT DEFAULT NULL, CHANGE id_vehicule_id id_vehicule_id INT DEFAULT NULL, CHANGE photoaccid photoaccid BLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule CHANGE id_client_id id_client_id INT DEFAULT NULL');
    }
}
