<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427111345 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE casaattributes (id INT AUTO_INCREMENT NOT NULL, cod_casa INT DEFAULT NULL, piscina TINYINT(1) DEFAULT \'0\', televisao TINYINT(1) DEFAULT \'0\', ar_condicionado TINYINT(1) DEFAULT \'0\', roupascama TINYINT(1) DEFAULT \'0\', roupasbanho TINYINT(1) DEFAULT \'0\', limpeza TINYINT(1) DEFAULT \'0\', utilcozinha TINYINT(1) DEFAULT \'0\', fogao TINYINT(1) DEFAULT \'0\', frigorif TINYINT(1) DEFAULT \'0\', congel TINYINT(1) DEFAULT \'0\', forno TINYINT(1) DEFAULT \'0\', barbecue TINYINT(1) DEFAULT \'0\', microndas TINYINT(1) DEFAULT \'0\', mlavaloica TINYINT(1) DEFAULT \'0\', mlavaroupa TINYINT(1) DEFAULT \'0\', aqcentral TINYINT(1) DEFAULT \'0\', satcabo TINYINT(1) DEFAULT \'0\', internet TINYINT(1) DEFAULT \'0\', fengomar TINYINT(1) DEFAULT \'0\', estacionamento TINYINT(1) DEFAULT \'0\', telefone TINYINT(1) DEFAULT \'0\', despertador TINYINT(1) DEFAULT \'0\', dvd TINYINT(1) DEFAULT \'0\', torradeira TINYINT(1) DEFAULT \'0\', INDEX IDX_E2FD3C1431BFD36A (cod_casa), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casageodata (id INT AUTO_INCREMENT NOT NULL, cod_casa INT DEFAULT NULL, pais VARCHAR(45) DEFAULT \'NULL\', distrito VARCHAR(45) DEFAULT \'NULL\', endereco VARCHAR(250) DEFAULT \'NULL\', codpostal VARCHAR(45) DEFAULT \'NULL\', lat VARCHAR(45) DEFAULT \'NULL\', lng VARCHAR(45) DEFAULT \'NULL\', altitude VARCHAR(45) DEFAULT \'NULL\', localidade VARCHAR(45) DEFAULT \'NULL\', concelho VARCHAR(45) DEFAULT \'0\', INDEX IDX_C80651CF31BFD36A (cod_casa), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE casaattributes ADD CONSTRAINT FK_E2FD3C1431BFD36A FOREIGN KEY (cod_casa) REFERENCES casa (cod_casa)');
        $this->addSql('ALTER TABLE casageodata ADD CONSTRAINT FK_C80651CF31BFD36A FOREIGN KEY (cod_casa) REFERENCES casa (cod_casa)');
        $this->addSql('ALTER TABLE alert CHANGE valor_arrenda valor_arrenda INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL, CHANGE valor_rent valor_rent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casa DROP pais, DROP distrito, DROP endereco, DROP codpostal, DROP lat, DROP lng, DROP altitude, DROP localidade, DROP piscina, DROP televisao, DROP ar_condicionado, DROP roupascama, DROP roupasbanho, DROP limpeza, DROP utilcozinha, DROP fogao, DROP frigorif, DROP congel, DROP forno, DROP barbecue, DROP microndas, DROP mlavaloica, DROP mlavaroupa, DROP aqcentral, DROP satcabo, DROP internet, DROP fengomar, DROP estacionamento, DROP telefone, DROP despertador, DROP dvd, DROP torradeira, DROP concelho, CHANGE propid propid INT DEFAULT NULL, CHANGE destino destino INT DEFAULT NULL, CHANGE tipo tipo INT DEFAULT NULL, CHANGE quartos quartos INT DEFAULT NULL, CHANGE camascasal camascasal INT DEFAULT NULL, CHANGE camassingle camassingle INT DEFAULT NULL, CHANGE casasbanho casasbanho INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casacancelissue CHANGE propid propid INT DEFAULT NULL');
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
        $this->addSql('DROP TABLE casaattributes');
        $this->addSql('DROP TABLE casageodata');
        $this->addSql('ALTER TABLE casaimages CHANGE cod_casa cod_casa INT DEFAULT NULL');
        $this->addSql('ALTER TABLE alert CHANGE valor_arrenda valor_arrenda INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL, CHANGE valor_rent valor_rent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casa ADD pais VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD distrito VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD endereco VARCHAR(250) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD codpostal VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD lat VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD lng VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD altitude VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD localidade VARCHAR(45) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, ADD piscina TINYINT(1) DEFAULT \'0\', ADD televisao TINYINT(1) DEFAULT \'0\', ADD ar_condicionado TINYINT(1) DEFAULT \'0\', ADD roupascama TINYINT(1) DEFAULT \'0\', ADD roupasbanho TINYINT(1) DEFAULT \'0\', ADD limpeza TINYINT(1) DEFAULT \'0\', ADD utilcozinha TINYINT(1) DEFAULT \'0\', ADD fogao TINYINT(1) DEFAULT \'0\', ADD frigorif TINYINT(1) DEFAULT \'0\', ADD congel TINYINT(1) DEFAULT \'0\', ADD forno TINYINT(1) DEFAULT \'0\', ADD barbecue TINYINT(1) DEFAULT \'0\', ADD microndas TINYINT(1) DEFAULT \'0\', ADD mlavaloica TINYINT(1) DEFAULT \'0\', ADD mlavaroupa TINYINT(1) DEFAULT \'0\', ADD aqcentral TINYINT(1) DEFAULT \'0\', ADD satcabo TINYINT(1) DEFAULT \'0\', ADD internet TINYINT(1) DEFAULT \'0\', ADD fengomar TINYINT(1) DEFAULT \'0\', ADD estacionamento TINYINT(1) DEFAULT \'0\', ADD telefone TINYINT(1) DEFAULT \'0\', ADD despertador TINYINT(1) DEFAULT \'0\', ADD dvd TINYINT(1) DEFAULT \'0\', ADD torradeira TINYINT(1) DEFAULT \'0\', ADD concelho VARCHAR(45) CHARACTER SET latin1 DEFAULT \'0\' COLLATE `latin1_swedish_ci`, CHANGE propid propid INT DEFAULT NULL, CHANGE destino destino INT DEFAULT NULL, CHANGE tipo tipo INT DEFAULT NULL, CHANGE quartos quartos INT DEFAULT NULL, CHANGE camascasal camascasal INT DEFAULT NULL, CHANGE camassingle camassingle INT DEFAULT NULL, CHANGE casasbanho casasbanho INT DEFAULT NULL, CHANGE valor_venda valor_venda INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casacancelissue CHANGE propid propid INT DEFAULT NULL');
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
