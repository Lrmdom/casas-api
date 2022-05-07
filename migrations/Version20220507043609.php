<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220507043609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE casaamenities (id INT AUTO_INCREMENT NOT NULL, quartos INT DEFAULT NULL, camascasal INT DEFAULT NULL, camassingle INT DEFAULT NULL, casasbanho INT DEFAULT NULL, animais TINYINT(1) DEFAULT \'0\', fumadores TINYINT(1) DEFAULT \'0\', deficientes VARCHAR(45) DEFAULT \'0\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE alert CHANGE valor_arrenda valor_arrenda INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL, CHANGE valor_rent valor_rent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casa DROP dist_centro, DROP dist_praia, DROP quartos, DROP camascasal, DROP camassingle, DROP casasbanho, DROP animais, DROP fumadores, DROP deficientes, CHANGE propid propid INT DEFAULT NULL, CHANGE destino destino INT DEFAULT NULL, CHANGE tipo tipo INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL, CHANGE ano anoConstrucao INT NOT NULL');
        $this->addSql('ALTER TABLE casaattributes CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casacancelissue CHANGE propid propid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casageodata ADD distCentro VARCHAR(45) DEFAULT \'NULL\', ADD distPraia VARCHAR(45) DEFAULT \'NULL\', CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casaimages CHANGE cod_casa cod_casa INT DEFAULT NULL');
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
        $this->addSql('DROP TABLE casaamenities');
        $this->addSql('ALTER TABLE alert CHANGE valor_arrenda valor_arrenda INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL, CHANGE valor_rent valor_rent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casa ADD dist_centro VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD dist_praia VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD quartos INT DEFAULT NULL, ADD camascasal INT DEFAULT NULL, ADD camassingle INT DEFAULT NULL, ADD casasbanho INT DEFAULT NULL, ADD animais TINYINT(1) DEFAULT \'0\', ADD fumadores TINYINT(1) DEFAULT \'0\', ADD deficientes VARCHAR(45) CHARACTER SET latin1 DEFAULT \'0\' COLLATE `latin1_swedish_ci`, CHANGE propid propid INT DEFAULT NULL, CHANGE destino destino INT DEFAULT NULL, CHANGE tipo tipo INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL, CHANGE anoconstrucao ano INT NOT NULL');
        $this->addSql('ALTER TABLE casaattributes CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casacancelissue CHANGE propid propid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casageodata DROP distCentro, DROP distPraia, CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casaimages CHANGE cod_casa cod_casa INT DEFAULT NULL');
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
