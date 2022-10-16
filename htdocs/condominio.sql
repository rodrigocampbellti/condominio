DROP DATABASE IF EXISTS condominio;

CREATE DATABASE condominio CHARACTER SET utf8 COLLATE utf8_general_ci;

USE condominio;




CREATE TABLE apartamento(
    id INT PRIMARY KEY AUTO_INCREMENT,
    bloco INT NOT NULL,
    numero INT NOT NULL,
    andar INT NOT NULL,
    dono VARCHAR (200) NOT NULL
);

CREATE TABLE morador(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    cpf VARCHAR (20) NOT NULL,
    tel VARCHAR (20) NOT NULL,
    conta_cond VARCHAR (300) NOT NULL,
    apt INT,
    veiculo ENUM ('Sim', 'Não') NOT NULL,
    FOREIGN KEY (apt) REFERENCES apartamento (id)

);

CREATE TABLE portaria(
  func VARCHAR (100) NOT NULL,
  cpf VARCHAR (20) NOT NULL,
  turno ENUM('Manhã', 'Tarde', 'Noite') NOT NULL,
  correio TEXT NOT NULL

);

CREATE TABLE limpeza(
    func VARCHAR (100) NOT NULL,
    cpf VARCHAR (20) NOT NULL,
    escala_bloco VARCHAR (100)NOT NULL,
    registro TEXT
);

CREATE TABLE administracao( 
    func VARCHAR (100) NOT NULL,
    cpf VARCHAR (20) NOT NULL,
    senha VARCHAR (100) NOT NULL,
    dia_atendimento DATE NOT NULL
);


CREATE TABLE seguranca(
  func VARCHAR (100) NOT NULL,
  cpf VARCHAR (20) NOT NULL,
  turno ENUM('Manhã', 'Tarde', 'Noite') NOT NULL,
  relatorio TEXT
);

CREATE TABLE estacionamento( 
    qtd_vaga INT NOT NULL,
    qtd_disponivel INT NOT NULL,
    numero_vaga INT NOT NULL,
    placa_carro VARCHAR (10) NOT NULL
);


CREATE TABLE salao(
    agenda TEXT NOT NULL,
    dispobilidade ENUM ('Sim', 'Não'),
    tempo_alugado VARCHAR (30) NOT NULL,
    locatario INT NOT NULL,
    FOREIGN KEY (locatario) REFERENCES morador (id)

);