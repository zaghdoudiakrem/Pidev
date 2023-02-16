<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215165528 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rapport ADD id_constat_id INT NOT NULL, ADD id_expert_id INT NOT NULL');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09CAE575B5B FOREIGN KEY (id_constat_id) REFERENCES constat (id)');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09C456330C3 FOREIGN KEY (id_expert_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BE34A09CAE575B5B ON rapport (id_constat_id)');
        $this->addSql('CREATE INDEX IDX_BE34A09C456330C3 ON rapport (id_expert_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09CAE575B5B');
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09C456330C3');
        $this->addSql('DROP INDEX UNIQ_BE34A09CAE575B5B ON rapport');
        $this->addSql('DROP INDEX IDX_BE34A09C456330C3 ON rapport');
        $this->addSql('ALTER TABLE rapport DROP id_constat_id, DROP id_expert_id');
    }
}
