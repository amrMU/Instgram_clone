<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200309194820 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE users (
                    id INT AUTO_INCREMENT NOT NULL, 
                    fname VARCHAR(100) DEFAULT NULL,
                    lname VARCHAR(100) DEFAULT NULL,
                    username VARCHAR(255) NOT NULL,
                    email VARCHAR(255) DEFAULT NULL,
                    roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\',
                    password VARCHAR(255) DEFAULT NULL,
                    UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username),
                    PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB'
                    );
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE users');
    }
}
