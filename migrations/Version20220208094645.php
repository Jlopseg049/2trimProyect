<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220208094645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE rutina_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE rutina (id INT NOT NULL, cliente_id INT NOT NULL, canal_id INT NOT NULL, fecha_inicio TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fecha_fin TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, precio DOUBLE PRECISION NOT NULL, dias TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A48AB255DE734E51 ON rutina (cliente_id)');
        $this->addSql('CREATE INDEX IDX_A48AB25568DB5B2E ON rutina (canal_id)');
        $this->addSql('COMMENT ON COLUMN rutina.dias IS \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE rutina ADD CONSTRAINT FK_A48AB255DE734E51 FOREIGN KEY (cliente_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE rutina ADD CONSTRAINT FK_A48AB25568DB5B2E FOREIGN KEY (canal_id) REFERENCES canal (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE rutina_id_seq CASCADE');
        $this->addSql('DROP TABLE rutina');
    }
}
