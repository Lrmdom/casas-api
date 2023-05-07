-- Doctrine Migration File Generated on 2023-05-07 14:34:25

-- Version DoctrineMigrations\Version20230507143413
ALTER TABLE reserva ADD casa INT DEFAULT NULL;
ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3B7F655D1D FOREIGN KEY (casa) REFERENCES casa (cod_casa);
CREATE INDEX IDX_188D2E3B7F655D1D ON reserva (casa);
ALTER TABLE reserva_payment ADD leo INT NOT NULL;
