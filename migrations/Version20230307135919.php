<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307135919 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contrat_offre (contrat_id INT NOT NULL, offre_id INT NOT NULL, INDEX IDX_55C4EFA91823061F (contrat_id), INDEX IDX_55C4EFA94CC8505A (offre_id), PRIMARY KEY(contrat_id, offre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devis_item (id INT AUTO_INCREMENT NOT NULL, devis_id INT NOT NULL, description LONGTEXT NOT NULL, quantite INT NOT NULL, unitprice DOUBLE PRECISION NOT NULL, totalprice DOUBLE PRECISION NOT NULL, INDEX IDX_50C944C141DEFADA (devis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, reclamation_id INT NOT NULL, note INT NOT NULL, commentaire LONGTEXT NOT NULL, INDEX IDX_1323A5752D6BA2D9 (reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrat_offre ADD CONSTRAINT FK_55C4EFA91823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrat_offre ADD CONSTRAINT FK_55C4EFA94CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE devis_item ADD CONSTRAINT FK_50C944C141DEFADA FOREIGN KEY (devis_id) REFERENCES devis (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5752D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
        $this->addSql('ALTER TABLE constat CHANGE mail mail VARCHAR(255) DEFAULT NULL, CHANGE date_creation date_creation DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat ADD photo_cin VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE devis ADD date DATE NOT NULL, DROP description, DROP etat, CHANGE montant total_ht DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F7F2DEE08');
        $this->addSql('DROP INDEX IDX_AF86866F7F2DEE08 ON offre');
        $this->addSql('ALTER TABLE offre ADD validite_offre VARCHAR(255) NOT NULL, ADD image_offre VARCHAR(255) NOT NULL, DROP facture_id, CHANGE prix prix INT NOT NULL');
        $this->addSql('ALTER TABLE rapport ADD rapportpreliminaire LONGTEXT NOT NULL, ADD rapportexpertise LONGTEXT NOT NULL, ADD image VARCHAR(255) NOT NULL, DROP rapport_preliminaire, DROP rapport_expertise');
        $this->addSql('ALTER TABLE reclamation ADD note INT NOT NULL');
        $this->addSql('ALTER TABLE rendez_vous ADD type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AC54C8C93 FOREIGN KEY (type_id) REFERENCES rapport (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_65E8AA0AC54C8C93 ON rendez_vous (type_id)');
        $this->addSql('ALTER TABLE user ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD password VARCHAR(255) NOT NULL, ADD reset_token VARCHAR(255) NOT NULL, ADD activation_token VARCHAR(100) NOT NULL, DROP mdp, DROP role, CHANGE email email VARCHAR(180) NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat_offre DROP FOREIGN KEY FK_55C4EFA91823061F');
        $this->addSql('ALTER TABLE contrat_offre DROP FOREIGN KEY FK_55C4EFA94CC8505A');
        $this->addSql('ALTER TABLE devis_item DROP FOREIGN KEY FK_50C944C141DEFADA');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5752D6BA2D9');
        $this->addSql('DROP TABLE contrat_offre');
        $this->addSql('DROP TABLE devis_item');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('ALTER TABLE constat CHANGE mail mail VARCHAR(255) NOT NULL, CHANGE date_creation date_creation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE contrat DROP photo_cin');
        $this->addSql('ALTER TABLE devis ADD description LONGTEXT NOT NULL, ADD etat TINYINT(1) NOT NULL, DROP date, CHANGE total_ht montant DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE offre ADD facture_id INT NOT NULL, DROP validite_offre, DROP image_offre, CHANGE prix prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F7F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('CREATE INDEX IDX_AF86866F7F2DEE08 ON offre (facture_id)');
        $this->addSql('ALTER TABLE rapport ADD rapport_preliminaire LONGTEXT NOT NULL, ADD rapport_expertise LONGTEXT NOT NULL, DROP rapportpreliminaire, DROP rapportexpertise, DROP image');
        $this->addSql('ALTER TABLE reclamation DROP note');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AC54C8C93');
        $this->addSql('DROP INDEX UNIQ_65E8AA0AC54C8C93 ON rendez_vous');
        $this->addSql('ALTER TABLE rendez_vous DROP type_id');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD mdp VARCHAR(255) NOT NULL, ADD role VARCHAR(255) NOT NULL, DROP roles, DROP password, DROP reset_token, DROP activation_token, CHANGE email email VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL');
    }
}