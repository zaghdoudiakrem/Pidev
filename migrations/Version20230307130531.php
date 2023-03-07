<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307130531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat ADD mail VARCHAR(255) DEFAULT NULL, ADD date_creation DATETIME DEFAULT NULL, ADD signature_id VARCHAR(255) DEFAULT NULL, ADD document_id VARCHAR(255) DEFAULT NULL, ADD signer_id VARCHAR(255) DEFAULT NULL, ADD pdf_sans_signature VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat DROP mail, DROP date_creation, DROP signature_id, DROP document_id, DROP signer_id, DROP pdf_sans_signature');
    }
}
