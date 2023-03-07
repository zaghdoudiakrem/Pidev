<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307130940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rapport ADD rapportpreliminaire LONGTEXT NOT NULL, ADD rapportexpertise LONGTEXT NOT NULL, ADD image VARCHAR(255) NOT NULL, DROP rapport_preliminaire, DROP rapport_expertise');
        $this->addSql('ALTER TABLE rendez_vous ADD type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AC54C8C93 FOREIGN KEY (type_id) REFERENCES rapport (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_65E8AA0AC54C8C93 ON rendez_vous (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rapport ADD rapport_preliminaire LONGTEXT NOT NULL, ADD rapport_expertise LONGTEXT NOT NULL, DROP rapportpreliminaire, DROP rapportexpertise, DROP image');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AC54C8C93');
        $this->addSql('DROP INDEX UNIQ_65E8AA0AC54C8C93 ON rendez_vous');
        $this->addSql('ALTER TABLE rendez_vous DROP type_id');
    }
}
