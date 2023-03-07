<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307134134 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contrat_offre (contrat_id INT NOT NULL, offre_id INT NOT NULL, INDEX IDX_55C4EFA91823061F (contrat_id), INDEX IDX_55C4EFA94CC8505A (offre_id), PRIMARY KEY(contrat_id, offre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrat_offre ADD CONSTRAINT FK_55C4EFA91823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrat_offre ADD CONSTRAINT FK_55C4EFA94CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrat ADD photo_cin VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F7F2DEE08');
        $this->addSql('DROP INDEX IDX_AF86866F7F2DEE08 ON offre');
        $this->addSql('ALTER TABLE offre ADD validite_offre VARCHAR(255) NOT NULL, ADD image_offre VARCHAR(255) NOT NULL, DROP facture_id, CHANGE prix prix INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat_offre DROP FOREIGN KEY FK_55C4EFA91823061F');
        $this->addSql('ALTER TABLE contrat_offre DROP FOREIGN KEY FK_55C4EFA94CC8505A');
        $this->addSql('DROP TABLE contrat_offre');
        $this->addSql('ALTER TABLE contrat DROP photo_cin');
        $this->addSql('ALTER TABLE offre ADD facture_id INT NOT NULL, DROP validite_offre, DROP image_offre, CHANGE prix prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F7F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('CREATE INDEX IDX_AF86866F7F2DEE08 ON offre (facture_id)');
    }
}
