<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220180149 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD type_id INT DEFAULT NULL, DROP type_user');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404C54C8C93 FOREIGN KEY (type_id) REFERENCES categorie_reclamation (id)');
        $this->addSql('CREATE INDEX IDX_CE606404C54C8C93 ON reclamation (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404C54C8C93');
        $this->addSql('DROP INDEX IDX_CE606404C54C8C93 ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD type_user VARCHAR(255) DEFAULT NULL, DROP type_id');
    }
}
