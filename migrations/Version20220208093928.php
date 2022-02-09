<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220208093928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE reserva_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE roles_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE reserva (id INT NOT NULL, cliente_id INT NOT NULL, canal_id INT NOT NULL, fecha_inicio TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fecha_fin TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, precio DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_188D2E3BDE734E51 ON reserva (cliente_id)');
        $this->addSql('CREATE INDEX IDX_188D2E3B68DB5B2E ON reserva (canal_id)');
        $this->addSql('CREATE TABLE roles (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3BDE734E51 FOREIGN KEY (cliente_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3B68DB5B2E FOREIGN KEY (canal_id) REFERENCES canal (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE canal ALTER precio TYPE DOUBLE PRECISION');
        $this->addSql('ALTER TABLE canal ALTER precio DROP DEFAULT');
        $this->addSql('ALTER TABLE canal RENAME COLUMN tema TO nombre');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE reserva_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE roles_id_seq CASCADE');
        $this->addSql('DROP TABLE reserva');
        $this->addSql('DROP TABLE roles');
        $this->addSql('ALTER TABLE canal ALTER precio TYPE INT');
        $this->addSql('ALTER TABLE canal ALTER precio DROP DEFAULT');
        $this->addSql('ALTER TABLE canal RENAME COLUMN nombre TO tema');
    }
}
