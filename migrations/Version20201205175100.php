<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201205175100 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, question_id INT DEFAULT NULL, contenue VARCHAR(255) DEFAULT NULL, INDEX IDX_5A8600B01E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, sondage_id INT NOT NULL, texte VARCHAR(255) DEFAULT NULL, INDEX IDX_B6F7494EBAF4AE56 (sondage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sondage (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT NULL, nb_participant INT DEFAULT NULL, nb_question INT DEFAULT NULL, nb_reponse INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `option` ADD CONSTRAINT FK_5A8600B01E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EBAF4AE56 FOREIGN KEY (sondage_id) REFERENCES sondage (id)');
        $this->addSql('ALTER TABLE cadeau ADD updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE sujet ADD updated_at DATETIME NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE titre titre VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `option` DROP FOREIGN KEY FK_5A8600B01E27F6BF');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EBAF4AE56');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE sondage');
        $this->addSql('ALTER TABLE cadeau DROP updated_at');
        $this->addSql('ALTER TABLE sujet DROP updated_at, CHANGE titre titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
