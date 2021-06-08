CREATE DATABASE stoph;

/* CRIAÇÃO DOS DADOS REFERENTE AO CLIENTE*/
CREATE TABLE cliente(
    idcliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40)NOT NULL,
    rg VARCHAR(15)UNIQUE,
    telefone VARCHAR(15),
    senha VARCHAR(30)UNIQUE
);


CREATE TABLE endereco(
    idendereco INT PRIMARY KEY AUTO_INCREMENT,
    cidade VARCHAR(30)NOT NULL,
    bairro VARCHAR(30)NOT NULL,
    rua VARCHAR(30)NOT NULL,
    complemento VARCHAR(45)NOT NULL,
    id_cliente INT,
    FOREIGN KEY(id_cliente)
    REFERENCES cliente(idcliente)
);
/*------------------------------------------*/








/*CRIAÇÃO DAS TABELAS REFERENTE AOS PRATOS*/
CREATE TABLE tipo(
    idtipo INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(40)
);

INSERT INTO tipo VALUE(NULL,'BRASILEIRA'),
                       (NULL,'SAUDÁVEL'),
                       (NULL,'LANCHES'),
                       (NULL,'CHINESA'),
                       (NULL,'CHURASCOS'),
                       (NULL,'ESLAVA'),
                       (NULL,'ITALIANA'),
                       (NULL,'PIZZA')
;

/* DADOS DA COMIDA BRASILEIRA*/
CREATE TABLE brasileira(
       idbr INT PRIMARY KEY AUTO_INCREMENT,
       prato VARCHAR(20),
       preco VARCHAR(8),
       id_tipo INT,
       FOREIGN KEY(id_tipo)
       REFERENCES tipo(idtipo)
);


INSERT INTO brasileira 
VALUES(NULL,'FEIJOADA','R$ 30.80',1),
      (NULL,'MOQUECA DE CAMARÃO','R$ 25.20',1),
      (NULL,'BAIÃO DE DOIS','R$ 24.99',1),
      (NULL,'ESCONDIDINHO DE MACAXEIRA','R$ 23.78',1),
      (NULL,'TORRESMO','R$ 21.90',1)
;      
/*-----------------------------*/








/*DADOS COMIDA SAUDÁVEL*/
CREATE TABLE saudavel(
       idsd INT PRIMARY KEY AUTO_INCREMENT,
       prato VARCHAR(20),
       preco VARCHAR(8),
       id_tipo INT,
       FOREIGN KEY(id_tipo)
       REFERENCES tipo(idtipo)
);

INSERT INTO saudavel 
VALUES(NULL,'OMELETE','R$ 15.25',2),
      (NULL,'BACOLHOADA LIGHT','R$ 35.99',2),
      (NULL,'ESCONDIDINHO DE BATATA DOCE C/FRANGO','R$ 34.00',2),
      (NULL,'FRANGO GRELHADO','R$ 24.80',2),
      (NULL,'CARNE MOÍDA C/ABÓBORA','R$ 22.90',2)
;      
/*-------------------------------------------------------*/








/*DADOS REFERENTES A LANCHES*/
CREATE TABLE lanches(
       idlan INT PRIMARY KEY AUTO_INCREMENT,
       prato VARCHAR(20),
       preco VARCHAR(8),
       id_tipo INT,
       FOREIGN KEY(id_tipo)
       REFERENCES tipo(idtipo)
);


INSERT INTO lanches 
VALUES(NULL,'AÇAÍ P','R$ 14.80',3),
      (NULL,'AÇAÍ M','R$ 20.80',3),
      (NULL,'AÇAÍ G','R$ 25.50',3),
      (NULL,'PORÇÃO BATATAS FRITAS MÉDIA','R$ 12.40',3),
      (NULL,'PORÇÃO BATATAS FRITAS GRANDE','R$ 20.50',3),
      (NULL,'CACHORRO QUENTE COMUM','R$ 10.50',3),
      (NULL,'CACHORRO QUENTE C/ FRANGO','R$ 13.50',3),
      (NULL,'CACHORRO QUENTE C/ BACON','R$ 12.50',3),
      (NULL,'PORÇÃO DE COXINHAS 180 GRAMAS','R$ 10.80',3),
      (NULL,'PORÇÃO DE COXINHAS 220 GRAMAS','R$ 14.50',3),
      (NULL,'HAMBURGER COMUM','R$ 7.50',3),
      (NULL,'X CALABRESA','R$ 7.50',3),
      (NULL,'X CALABRESA C/ OVO','R$ 10.00',3),
      (NULL,'X CALABRESA C/ BACON','R$ 10.50',3),
      (NULL,'X CALABRESA C/ FRANGO','R$ 10.50',3),
      (NULL,'X FRANGO','R$ 7.50',3),
      (NULL,'X FRANGO C/ OVO','R$ 9.50',3),
      (NULL,'X FRANGO C/ BACON','R$ 10.25',3),
      (NULL,'X FRANGO C/ CALABRESA','R$ 10.25',3),
      (NULL,'X IGNORÂNCIA','R$ 22.50',3),
      (NULL,'MISTO QUENTE','R$ 5.00',3)
;      
/*-------------------------------------------------------------*/








/*DADOS REFERENTES A COMIDA CHINESA*/
CREATE TABLE chinesa(
       idch INT PRIMARY KEY AUTO_INCREMENT,
       prato VARCHAR(20),
       preco VARCHAR(8),
       id_tipo INT,
       FOREIGN KEY(id_tipo)
       REFERENCES tipo(idtipo)
);

INSERT INTO chinesa
VALUES(NULL,'PEIXE AGRIDOCE','R$ 15.75',4),
      (NULL,'RISOTO','R$ 10.00',4),
      (NULL,'ROLINHO PRIMAVERA','R$ 7.50',4),
      (NULL,'SUSHI','R$ 8.75',4),
      (NULL,'YAKISOBA DE FRANGO','R$ 22.50',4), 
      (NULL,'YAKISOBA DE CARNE','R$ 22.50',4),
      (NULL,'YAKISOBA DE CAMARÃO','R$ 22.50',4),
      (NULL,'YAKISOBA DE FRANGO C/ CARNE','R$ 25.75',4),
      (NULL,'YAKISOBA DE FRANGO C/ CAMARÃO','R$ 25.75',4),
      (NULL,'YAKISOBA DE CARNE C/ FRANGO','R$ 25.75',4), 
      (NULL,'YAKISOBA DE CARNE C/ CAMARÃO','R$ 25.75',4),
      (NULL,'YAKISOBA DE CAMARÃO C/ FRANGO','R$ 25.75',4),
      (NULL,'YAKISOBA DE CAMARÃO C/ CARNE','R$ 25.75',4),
      (NULL,'YAKISOBA DE COMPLETO','R$ 30.00 25.75',4)
;
/*-------------------------------------------------------------------*/








/*DADOS REFERENTES AOS CHURRASCOS*/
CREATE TABLE churrascos(
       idchuras INT PRIMARY KEY AUTO_INCREMENT,
       prato VARCHAR(20),
       preco VARCHAR(8),
       id_tipo INT,
       FOREIGN KEY(id_tipo)
       REFERENCES tipo(idtipo)
);

INSERT INTO churrascos
VALUES      (NULL,'ALCATRA SIMPLES','R$ 21.75',5),
            (NULL,'ALCATRA C/ CALABRESA','R$ 25.50',5),
            (NULL,'ALCATRA C/ COCHÃO MOLE','R$ 25.50',5),
            (NULL,'ALCATRA C/ CONTRA FILÉ','R$ 25.50',5),
            (NULL,'ALCATRA C/ MAMINHA','R$ 25.50',5),
            (NULL,'ALCATRA C/ PICANHA','R$ 25.50',5),
            (NULL,'CALABRESA SIMPLES','R$ 21.75',5),
            (NULL,'CALABRESA C/ COCHÃO MOLE','R$ 25.50',5),
            (NULL,'CALABRESA C/ CONTRA FILÉ','R$ 25.50',5),
            (NULL,'CALABRESA C/ MAMINHA','R$ 25.50',5),
            (NULL,'CALABRESA C/ PICANHA','R$ 25.50',5),
            (NULL,'COCHÃO MOLE SIMPLES','R$ 21.75',5),
            (NULL,'COCHÃO MOLE C/ MAMINHA ','R$ 25.50',5),    
            (NULL,'COCHÃO MOLE C/ PICANHA ','R$ 25.50',5),
            (NULL,'PICANHA SIMPLES','R$ 21.75',5),
            (NULL,'PROTEÍNA TOTAL','R$ 30.00',5)
;
/*--------------------------------------------------------------------*/








/*DADOS REFERENTES A COMIDAS ESLAVAS*/
CREATE TABLE eslava(
       idslav INT PRIMARY KEY AUTO_INCREMENT,
       prato VARCHAR(20),
       preco VARCHAR(8),
       id_tipo INT,
       FOREIGN KEY(id_tipo)
       REFERENCES tipo(idtipo)
);

INSERT INTO eslava
VALUES(NULL,'BORSCHT','R$ 15.00',6),
      (NULL,'CHAK CHAK','R$ 14.75',6),
      (NULL,'CHARUTOS ESLAVOS','R$ 22.00',6),
      (NULL,'GELATINA DE CARNE','R$ 10.50',6),
      (NULL,'PEREPECHI','R$ 12.00',6),
      (NULL,'PIROGUE','R$ 15.80',6),
      (NULL,'TORTA DE CARNE C/ OVO','R$ 25.00',6)
;      
/*----------------------------------------------*/


/*DADOS REFERENTES A COMIDA ITALIANA*/
CREATE TABLE italiana(
       idit INT PRIMARY KEY AUTO_INCREMENT,
       prato VARCHAR(20),
       preco VARCHAR(8),
       id_tipo INT,
       FOREIGN KEY(id_tipo)
       REFERENCES tipo(idtipo)
);

INSERT INTO italiana
VALUES(NULL,'BRUSCHETTA','R$ 22.50',7),
      (NULL,'FETTUCCINE','R$ 15.50',7),
      (NULL,'MACARRONOADA /ESPAGUETE','R$ 21.00',7),
      (NULL,'MACARRONOADA /PARAFUSO','R$ 21.00',7),
      (NULL,'MACARRONOADA /PENNE','R$ 21.00',7),
      (NULL,'MACARRONOADA /LINGUINE','R$ 21.00',7),
      (NULL,'LASANHA','R$ 18.75',7),
      (NULL,'NHOQUE','R$ 13.90',7)
;
/*----------------------------------*/








/*DADOS REFERENTES A PIZZAS*/
CREATE TABLE pizza(
       idpizz INT PRIMARY KEY AUTO_INCREMENT,
       prato VARCHAR(20),
       preco VARCHAR(8),
       id_tipo INT,
       FOREIGN KEY(id_tipo)
       REFERENCES tipo(idtipo)
);

INSERT INTO pizza
VALUES(NULL,'QUATRO QUEIJOS P','R$ 17.50',7),
      (NULL,'QUATRO QUEIJOS M','R$ 19.80',7),
      (NULL,'QUATRO QUEIJOS G','R$ 22.20',7),
      (NULL,'MUSSARELA P','R$ 17.50',7),
      (NULL,'MUSSARELA M','R$ 19.80',7),
      (NULL,'MUSSARELA G','R$ 22.20',7),
      (NULL,'MARGUERITA P','R$ 17.50',7),
      (NULL,'MARGUERITA M','R$ 19.80',7),
      (NULL,'MARGUERITA G','R$ 22.20',7),
      (NULL,'PORTUGUESA P','R$ 17.50',7),
      (NULL,'PORTUGUESA M','R$ 19.80',7),
      (NULL,'PORTUGUESA G','R$ 22.20',7),
      (NULL,'FRANGO C/ CATUPIRY P','R$ 17.50',7),
      (NULL,'FRANGO C/ CATUPIRY M','R$ 19.80',7),
      (NULL,'FRANGO C/ CATUPIRY G','R$ 22.20',7),
      (NULL,'BAIANA P','R$ 17.50',7),
      (NULL,'BAIANA M','R$ 19.80',7),
      (NULL,'BAIANA G','R$ 22.20',7),
      (NULL,'NAPOLITANA P','R$ 17.50',7),
      (NULL,'NAPOLITANA M','R$ 19.80',7),
      (NULL,'NAPOLITANA G','R$ 22.20',7),
      (NULL,'CALABRESA P','R$ 17.50',7),
      (NULL,'CALABRESA M','R$ 19.80',7),
      (NULL,'CALABRESA G','R$ 22.20',7),
      (NULL,'LOMBINHO P','R$ 17.50',7),
      (NULL,'LOMBINHO M','R$ 19.80',7),
      (NULL,'LOMBINHO G','R$ 22.20',7),
      (NULL,'CALABRIA P','R$ 17.50',7),
      (NULL,'CALABRIA M','R$ 19.80',7),
      (NULL,'CALABRIA G','R$ 22.20',7),
      (NULL,'BRIGADEIRO P','R$ 17.50',7),
      (NULL,'BRIGADEIRO M','R$ 19.80',7),
      (NULL,'BRIGADEIRO G','R$ 22.20',7),
      (NULL,'ROMEU E JULIETA P','R$ 17.50',7),
      (NULL,'ROMEU E JULIETA M','R$ 19.80',7),
      (NULL,'ROMEU E JULIETA G','R$ 22.20',7),
      (NULL,'BANANA C/ NUTELLA P','R$ 17.50',7),
      (NULL,'BANANA C/ NUTELLA M','R$ 19.80',7),
      (NULL,'BANANA C/ NUTELLA G','R$ 22.20',7)
;
/*------------------------------------------------------------*/


CREATE TABLE compra(
      idcomp INT PRIMARY KEY AUTO_INCREMENT,
      id_cli INT,
      id_end INT,
      id_tip INT,
      FOREIGN KEY(id_cli)
      REFERENCES cliente(idcliente),
      FOREIGN KEY(id_end)
      REFERENCES endereco(idendereco),
      FOREIGN KEY(id_tip)
      REFERENCES tipo(idtipo)
);
















































































