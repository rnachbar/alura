/* COMANDOS PARA CRIAÇÃO DO BANCO DE DADOS */

CREATE DATABASE mercado;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  `preco` decimal(10,2) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `produtos` VALUES (1,'Bola de Futebol','Bola de futebol assinada pelo Zico',300.00,1),(2,'HD Externo','Marca HD-Mega',400.00,1);

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` VALUES (1,'Guilherme','guilherme.silveira@alura.com.br','e10adc3949ba59abbe56e057f20f883e');