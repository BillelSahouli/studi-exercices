<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125225905 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE performance_exercice (performance_id INT NOT NULL, exercice_id INT NOT NULL, INDEX IDX_6F05A34FB91ADEEE (performance_id), INDEX IDX_6F05A34F89D40298 (exercice_id), PRIMARY KEY(performance_id, exercice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE performance_exercice ADD CONSTRAINT FK_6F05A34FB91ADEEE FOREIGN KEY (performance_id) REFERENCES performance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performance_exercice ADD CONSTRAINT FK_6F05A34F89D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performance DROP FOREIGN KEY FK_82D7968189D40298');
        $this->addSql('DROP INDEX IDX_82D7968189D40298 ON performance');
        $this->addSql('ALTER TABLE performance DROP exercice_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE performance_exercice');
        $this->addSql('ALTER TABLE performance ADD exercice_id INT NOT NULL');
        $this->addSql('ALTER TABLE performance ADD CONSTRAINT FK_82D7968189D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_82D7968189D40298 ON performance (exercice_id)');
    }
}
