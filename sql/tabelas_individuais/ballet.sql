CREATE TABLE ballet (
	codFunc 		INT(11) AUTO_INCREMENT PRIMARY KEY,
	nomeMae 		VARCHAR(70),
	cpfMae 			VARCHAR(20),
	nome 			VARCHAR(70),
	cpf 			VARCHAR(20),
	sexo 			CHAR(1),
	dataNasc 		DATE,
	telFixo 		BIGINT(13),
	cel 			BIGINT(14),
	cidade 			VARCHAR(20),
	bairro 			VARCHAR(20),
	endereco 		VARCHAR(60),
	dataInsc	 	DATE,
	setor	 		VARCHAR(20)
);
