<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125234009 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE performance (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, exercice_id INT NOT NULL, weight DOUBLE PRECISION NOT NULL, repetition INT NOT NULL, INDEX IDX_82D79681A76ED395 (user_id), INDEX IDX_82D7968189D40298 (exercice_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE performance ADD CONSTRAINT FK_82D79681A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE performance ADD CONSTRAINT FK_82D7968189D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE performance');
    }
}
