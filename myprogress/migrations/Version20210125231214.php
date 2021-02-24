<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125231214 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE performance_exercice DROP FOREIGN KEY FK_6F05A34FB91ADEEE');
        $this->addSql('DROP TABLE performance');
        $this->addSql('DROP TABLE performance_exercice');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE performance (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, repetition INT NOT NULL, weight DOUBLE PRECISION NOT NULL, date DATETIME DEFAULT NULL, INDEX IDX_82D79681A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE performance_exercice (performance_id INT NOT NULL, exercice_id INT NOT NULL, INDEX IDX_6F05A34F89D40298 (exercice_id), INDEX IDX_6F05A34FB91ADEEE (performance_id), PRIMARY KEY(performance_id, exercice_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE performance ADD CONSTRAINT FK_82D79681A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE performance_exercice ADD CONSTRAINT FK_6F05A34F89D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performance_exercice ADD CONSTRAINT FK_6F05A34FB91ADEEE FOREIGN KEY (performance_id) REFERENCES performance (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
