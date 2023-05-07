<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230507143413 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reserva ADD casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3B7F655D1D FOREIGN KEY (casa) REFERENCES casa (cod_casa)');
        $this->addSql('CREATE INDEX IDX_188D2E3B7F655D1D ON reserva (casa)');
        $this->addSql('ALTER TABLE reserva_payment ADD leo INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reserva DROP FOREIGN KEY FK_188D2E3B7F655D1D');
        $this->addSql('DROP INDEX IDX_188D2E3B7F655D1D ON reserva');
        $this->addSql('ALTER TABLE reserva DROP casa');
        $this->addSql('ALTER TABLE reserva_payment DROP leo');
    }
}
