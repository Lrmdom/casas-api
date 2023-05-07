<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230507231510 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reserva CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_188D2E3B31BFD36A ON reserva (cod_casa)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reserva DROP FOREIGN KEY FK_188D2E3B31BFD36A');
        $this->addSql('DROP INDEX IDX_188D2E3B31BFD36A ON reserva');
        $this->addSql('ALTER TABLE reserva CHANGE cod_casa cod_casa INT DEFAULT 23');
    }
}
