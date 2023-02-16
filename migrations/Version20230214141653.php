<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214141653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE devis (id INT AUTO_INCREMENT NOT NULL, id_expert_id INT DEFAULT NULL, id_mécanicien_id INT DEFAULT NULL, montant VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_8B27C52B456330C3 (id_expert_id), INDEX IDX_8B27C52BB8107F5C (id_mécanicien_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B456330C3 FOREIGN KEY (id_expert_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52BB8107F5C FOREIGN KEY (id_mécanicien_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B456330C3');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52BB8107F5C');
        $this->addSql('DROP TABLE devis');
    }
}
