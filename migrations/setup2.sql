DROP TABLE IF EXISTS casaamenities;

CREATE TABLE casaamenities (
    id SERIAL PRIMARY KEY,
    cod_casa INT UNIQUE,
    quartos INT,
    camascasal INT,
    camassingle INT,
    casasbanho INT,
    animais BOOLEAN DEFAULT FALSE,
    fumadores BOOLEAN DEFAULT FALSE,
    deficientes VARCHAR(45) DEFAULT '0',
    CONSTRAINT FK_5B26CB1031BFD36A FOREIGN KEY (cod_casa) REFERENCES casa (cod_casa)
);



DROP TABLE IF EXISTS casaattributes;

CREATE TABLE casaattributes (
    id SERIAL PRIMARY KEY,
    cod_casa INT UNIQUE,
    piscina BOOLEAN DEFAULT FALSE,
    televisao BOOLEAN DEFAULT FALSE,
    ar_condicionado BOOLEAN DEFAULT FALSE,
    roupascama BOOLEAN DEFAULT FALSE,
    roupasbanho BOOLEAN DEFAULT FALSE,
    limpeza BOOLEAN DEFAULT FALSE,
    utilcozinha BOOLEAN DEFAULT FALSE,
    fogao BOOLEAN DEFAULT FALSE,
    frigorif BOOLEAN DEFAULT FALSE,
    congel BOOLEAN DEFAULT FALSE,
    forno BOOLEAN DEFAULT FALSE,
    barbecue BOOLEAN DEFAULT FALSE,
    microndas BOOLEAN DEFAULT FALSE,
    mlavaloica BOOLEAN DEFAULT FALSE,
    mlavaroupa BOOLEAN DEFAULT FALSE,
    aqcentral BOOLEAN DEFAULT FALSE,
    satcabo BOOLEAN DEFAULT FALSE,
    internet BOOLEAN DEFAULT FALSE,
    fengomar BOOLEAN DEFAULT FALSE,
    estacionamento BOOLEAN DEFAULT FALSE,
    telefone BOOLEAN DEFAULT FALSE,
    despertador BOOLEAN DEFAULT FALSE,
    dvd BOOLEAN DEFAULT FALSE,
    torradeira BOOLEAN DEFAULT FALSE,
    CONSTRAINT FK_E2FD3C1431BFD36A FOREIGN KEY (cod_casa) REFERENCES casa (cod_casa)
);


DROP TABLE IF EXISTS casageodata;

CREATE TABLE casageodata (
    id SERIAL PRIMARY KEY,
    cod_casa INT,
    pais VARCHAR(45) DEFAULT 'NULL',
    distrito VARCHAR(45) DEFAULT 'NULL',
    endereco VARCHAR(250) DEFAULT 'NULL',
    codpostal VARCHAR(45) DEFAULT 'NULL',
    lat VARCHAR(45) DEFAULT 'NULL',
    lng VARCHAR(45) DEFAULT 'NULL',
    altitude VARCHAR(45) DEFAULT 'NULL',
    localidade VARCHAR(45) DEFAULT 'NULL',
    concelho VARCHAR(45) DEFAULT '0',
    distCentro VARCHAR(45) DEFAULT 'NULL',
    distPraia VARCHAR(45) DEFAULT 'NULL',
    CONSTRAINT FK_C80651CF31BFD36A FOREIGN KEY (cod_casa) REFERENCES casa (cod_casa)
);

CREATE INDEX IDX_C80651CF31BFD36A ON casageodata (cod_casa);

DROP TABLE IF EXISTS casaimages;

CREATE TABLE casaimages (
    id SERIAL PRIMARY KEY,
    cod_casa INT NOT NULL,
    img1 VARCHAR(255) DEFAULT 'images/noimage.jpg',
    path VARCHAR(255) DEFAULT 'images/noimage.jpg',
    CONSTRAINT FK_CC818C0931BFD36A FOREIGN KEY (cod_casa) REFERENCES casa (cod_casa)
);

CREATE INDEX IDX_CC818C0931BFD36A ON casaimages (cod_casa);