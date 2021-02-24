<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125154831 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE performance ADD exercice_id INT NOT NULL');
        $this->addSql('ALTER TABLE performance ADD CONSTRAINT FK_82D7968189D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id)');
        $this->addSql('CREATE INDEX IDX_82D7968189D40298 ON performance (exercice_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE performance DROP FOREIGN KEY FK_82D7968189D40298');
        $this->addSql('DROP INDEX IDX_82D7968189D40298 ON performance');
        $this->addSql('ALTER TABLE performance DROP exercice_id');
    }
}
