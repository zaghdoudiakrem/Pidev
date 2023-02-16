<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215171822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE facture ADD id_client_id INT NOT NULL');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE86641099DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FE86641099DED506 ON facture (id_client_id)');
        $this->addSql('ALTER TABLE offre ADD facture_id INT NOT NULL');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F7F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('CREATE INDEX IDX_AF86866F7F2DEE08 ON offre (facture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641099DED506');
        $this->addSql('DROP INDEX UNIQ_FE86641099DED506 ON facture');
        $this->addSql('ALTER TABLE facture DROP id_client_id');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F7F2DEE08');
        $this->addSql('DROP INDEX IDX_AF86866F7F2DEE08 ON offre');
        $this->addSql('ALTER TABLE offre DROP facture_id');
    }
}
