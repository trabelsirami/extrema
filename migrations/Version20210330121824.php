<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330121824 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `group` CHANGE date_group date_group DATE DEFAULT NULL');
        $this->addSql('CREATE FULLTEXT INDEX IDX_6DC044C56C6E55B56DE44026 ON `group` (nom, description)');
        $this->addSql('ALTER TABLE reclamation CHANGE categorierec_id categorierec_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_6DC044C56C6E55B56DE44026 ON `group`');
        $this->addSql('ALTER TABLE `group` CHANGE date_group date_group DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE reclamation CHANGE categorierec_id categorierec_id INT DEFAULT NULL');
    }
}
