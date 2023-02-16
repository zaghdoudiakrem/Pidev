<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230216102856 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE constat (id INT AUTO_INCREMENT NOT NULL, id_expert_id INT NOT NULL, id_vehicule_id INT NOT NULL, nomclient_e VARCHAR(255) DEFAULT NULL, prenomclient_e VARCHAR(255) DEFAULT NULL, typevehicule_e VARCHAR(255) DEFAULT NULL, marquevehicule_e VARCHAR(255) DEFAULT NULL, assuranceclient_e VARCHAR(255) DEFAULT NULL, adresseclient_e VARCHAR(255) DEFAULT NULL, emplacementaccid VARCHAR(255) DEFAULT NULL, photoaccid VARCHAR(255) DEFAULT NULL, descriptiondegat LONGTEXT NOT NULL, observations LONGTEXT NOT NULL, numcontrat_e VARCHAR(255) DEFAULT NULL, INDEX IDX_F96EDD98456330C3 (id_expert_id), INDEX IDX_F96EDD985258F8E6 (id_vehicule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, id_vehicule_id INT NOT NULL, id_client_id INT NOT NULL, validitedu DATE NOT NULL, validiteau DATE NOT NULL, UNIQUE INDEX UNIQ_603499935258F8E6 (id_vehicule_id), INDEX IDX_6034999399DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devis (id INT AUTO_INCREMENT NOT NULL, id_mecanicien_id INT NOT NULL, montant DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, etat TINYINT(1) NOT NULL, id_expert INT NOT NULL, INDEX IDX_8B27C52B62EA24CB (id_mecanicien_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, UNIQUE INDEX UNIQ_FE86641099DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE locale (id INT AUTO_INCREMENT NOT NULL, id_mecanicien_id INT NOT NULL, adresse VARCHAR(255) NOT NULL, INDEX IDX_4180C69862EA24CB (id_mecanicien_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre (id INT AUTO_INCREMENT NOT NULL, facture_id INT NOT NULL, description LONGTEXT NOT NULL, prix DOUBLE PRECISION NOT NULL, titre VARCHAR(255) NOT NULL, INDEX IDX_AF86866F7F2DEE08 (facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, id_constat_id INT NOT NULL, id_expert_id INT NOT NULL, description LONGTEXT NOT NULL, rapport_preliminaire LONGTEXT NOT NULL, rapport_expertise LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_BE34A09CAE575B5B (id_constat_id), INDEX IDX_BE34A09C456330C3 (id_expert_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, description LONGTEXT NOT NULL, objet VARCHAR(255) NOT NULL, INDEX IDX_CE60640499DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, id_client_id INT DEFAULT NULL, date DATE NOT NULL, lieu VARCHAR(255) NOT NULL, id_expert INT DEFAULT NULL, id_mecanicien INT DEFAULT NULL, INDEX IDX_65E8AA0A99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, id_reclamation_id INT NOT NULL, id_assureur_id INT NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_5FB6DEC7100D1FDF (id_reclamation_id), INDEX IDX_5FB6DEC798E52FFD (id_assureur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, num_tel INT NOT NULL, email VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, cin INT NOT NULL, role VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, id_client_id INT NOT NULL, matricule VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, nb_ch INT NOT NULL, INDEX IDX_292FFF1D99DED506 (id_client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE constat ADD CONSTRAINT FK_F96EDD98456330C3 FOREIGN KEY (id_expert_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE constat ADD CONSTRAINT FK_F96EDD985258F8E6 FOREIGN KEY (id_vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_603499935258F8E6 FOREIGN KEY (id_vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_6034999399DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52B62EA24CB FOREIGN KEY (id_mecanicien_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE86641099DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE locale ADD CONSTRAINT FK_4180C69862EA24CB FOREIGN KEY (id_mecanicien_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F7F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09CAE575B5B FOREIGN KEY (id_constat_id) REFERENCES constat (id)');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09C456330C3 FOREIGN KEY (id_expert_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640499DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A99DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7100D1FDF FOREIGN KEY (id_reclamation_id) REFERENCES reclamation (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC798E52FFD FOREIGN KEY (id_assureur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D99DED506 FOREIGN KEY (id_client_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat DROP FOREIGN KEY FK_F96EDD98456330C3');
        $this->addSql('ALTER TABLE constat DROP FOREIGN KEY FK_F96EDD985258F8E6');
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_603499935258F8E6');
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_6034999399DED506');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52B62EA24CB');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641099DED506');
        $this->addSql('ALTER TABLE locale DROP FOREIGN KEY FK_4180C69862EA24CB');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F7F2DEE08');
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09CAE575B5B');
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09C456330C3');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640499DED506');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A99DED506');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7100D1FDF');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC798E52FFD');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D99DED506');
        $this->addSql('DROP TABLE constat');
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE devis');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE locale');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vehicule');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
