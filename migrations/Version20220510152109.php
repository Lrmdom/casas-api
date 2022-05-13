<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510152109 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alert CHANGE valor_arrenda valor_arrenda INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL, CHANGE valor_rent valor_rent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casa CHANGE propid propid INT DEFAULT NULL, CHANGE adicionado adicionado VARCHAR(45) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, CHANGE destino destino INT DEFAULT NULL, CHANGE tipo tipo INT DEFAULT NULL, CHANGE valor_venda valor_venda VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE casaamenities CHANGE cod_casa cod_casa INT DEFAULT NULL, CHANGE quartos quartos INT DEFAULT NULL, CHANGE camascasal camascasal INT DEFAULT NULL, CHANGE camassingle camassingle INT DEFAULT NULL, CHANGE casasbanho casasbanho INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casaattributes CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casacancelissue CHANGE propid propid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casageodata CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compare CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE feedbackcoment CHANGE cod_casa cod_casa INT DEFAULT NULL, CHANGE valor_voto valor_voto INT DEFAULT NULL, CHANGE reserva reserva INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mylist CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE preco CHANGE ano ano INT DEFAULT NULL, CHANGE n_semana n_semana INT DEFAULT NULL, CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE prereserva CHANGE forma_pagamento forma_pagamento INT DEFAULT NULL, CHANGE valor valor INT DEFAULT NULL');
        $this->addSql('ALTER TABLE proprietario CHANGE propid propid INT AUTO_INCREMENT DEFAULT NULL NOT NULL');
        $this->addSql('ALTER TABLE proprietariocancelissue CHANGE propid propid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reserva CHANGE n_prereserva n_prereserva INT DEFAULT NULL, CHANGE tipopagamento tipopagamento INT DEFAULT NULL, CHANGE n_pagamento n_pagamento INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alert CHANGE valor_arrenda valor_arrenda INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL, CHANGE valor_rent valor_rent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casa CHANGE propid propid INT DEFAULT NULL, CHANGE adicionado adicionado VARCHAR(45) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE destino destino INT DEFAULT NULL, CHANGE tipo tipo INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casaamenities CHANGE cod_casa cod_casa INT DEFAULT NULL, CHANGE quartos quartos INT DEFAULT NULL, CHANGE camascasal camascasal INT DEFAULT NULL, CHANGE camassingle camassingle INT DEFAULT NULL, CHANGE casasbanho casasbanho INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casaattributes CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casacancelissue CHANGE propid propid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casageodata CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compare CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE feedbackcoment CHANGE cod_casa cod_casa INT DEFAULT NULL, CHANGE valor_voto valor_voto INT DEFAULT NULL, CHANGE reserva reserva INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mylist CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE preco CHANGE ano ano INT DEFAULT NULL, CHANGE n_semana n_semana INT DEFAULT NULL, CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE prereserva CHANGE forma_pagamento forma_pagamento INT DEFAULT NULL, CHANGE valor valor INT DEFAULT NULL');
        $this->addSql('ALTER TABLE proprietario CHANGE propid propid INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE proprietariocancelissue CHANGE propid propid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reserva CHANGE n_prereserva n_prereserva INT DEFAULT NULL, CHANGE tipopagamento tipopagamento INT DEFAULT NULL, CHANGE n_pagamento n_pagamento INT DEFAULT NULL');
    }
}
