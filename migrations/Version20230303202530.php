<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230303202530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat ADD signature_id VARCHAR(255) DEFAULT NULL, ADD document_id VARCHAR(255) DEFAULT NULL, ADD signer_id VARCHAR(255) DEFAULT NULL, ADD pdf_sans_signature VARCHAR(255) DEFAULT NULL, DROP signatureId, DROP documentId, DROP signerId, DROP PdfSansSignature, CHANGE Date_creation date_creation DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AB8107F5C');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A456330C3');
        $this->addSql('DROP INDEX IDX_65E8AA0AB8107F5C ON rendez_vous');
        $this->addSql('DROP INDEX IDX_65E8AA0A456330C3 ON rendez_vous');
        $this->addSql('ALTER TABLE rendez_vous ADD id_expert INT DEFAULT NULL, ADD id_mecanicien INT DEFAULT NULL, DROP id_expert_id, DROP id_mécanicien_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat ADD signatureId VARCHAR(255) DEFAULT NULL, ADD documentId VARCHAR(255) DEFAULT NULL, ADD signerId VARCHAR(255) DEFAULT NULL, ADD PdfSansSignature VARCHAR(255) DEFAULT NULL, DROP signature_id, DROP document_id, DROP signer_id, DROP pdf_sans_signature, CHANGE date_creation Date_creation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE rendez_vous ADD id_expert_id INT DEFAULT NULL, ADD id_mécanicien_id INT DEFAULT NULL, DROP id_expert, DROP id_mecanicien');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AB8107F5C FOREIGN KEY (id_mécanicien_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A456330C3 FOREIGN KEY (id_expert_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0AB8107F5C ON rendez_vous (id_mécanicien_id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0A456330C3 ON rendez_vous (id_expert_id)');
    }
}
