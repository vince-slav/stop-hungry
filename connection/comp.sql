CREATE TABLE compra(
    IDCOMP INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50)NOT NULL,
    TELEFONE VARCHAR(20),
    CPF VARCHAR(15),
    ENDERECO VARCHAR (90),
    COMPLEMENTO VARCHAR(30),
    PAGAMENTO VARCHAR(15)
);