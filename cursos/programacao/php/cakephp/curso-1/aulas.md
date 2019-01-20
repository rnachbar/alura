# CakePHP

## Aula 1

*Sobe servidor php local*
* `$ php -S localhost:8080`

*Sobe servidor local no cakephp (dentro da pasta do projeto)*
* `$ bin/cake server`

*Primeiro acesso - Quando fazemos uma requisição para o servidor e executa uma lógica e essa lógica mostra uma visualização para o usuário*

*Lógica padrão do cake fica em Controller/PagesController.php*

*View padrão do cake fica em Template/Pages/home.ctp*

*Extensão .ctp significa Cake Template*

*Regra para criar controller*
* O que vai controlar no plural seguido da palavra Controller (ProdutosController.php)

*Header, Footer e estrutura das páginas padrão ficam em Template/Layout/default.ctp*

*Quando executamos a URL http://localhost:8765/produtos o cake procura um cara que controla a lógica de produtos e como não falamos qual a ação vai ser executada ele executa a ação padrão (index)*

## Aula 2

*Conectando ao banco*
* `$ mysql -uroot -p`

*Criando base de dados*
* `$ create database estoque;`
* `$ use estoque;`
* `$ create table produtos (id int(11) not null auto_increment primary key, 
		nome varchar(255) not null, 
		preco decimal(10,2) not null, 
		descricao text not null
	);`
* `$ insert into produtos (nome, preco, descricao) values ('iphone 6 plus', 3800.00, 'celular caro');`

*Model ficam as interações com o banco de dados*

*Pasta Table referencia as tabelas*
* Model/Table

*Referenciar o controller produtos devemos criar a tabela com mesmo nome (ProdutosTable.php)*

*Na pasta config tem o arquivo app.php com todas as configuraçõe da nossa aplicação*
* config/app.php

*A ORM do cake que faz as consulas com mysql, nos só damos os comandos*

## Aula 3

*Helpers ficam em*
* Template/View/Helper

*Nome_do_helperHelper.php e a classe estende para Helper*

*Para iniciar um Helper, carregalo sempre, alterar a public function initialize no AppView.php dando load no helper criado*
* Template/View/Helper/AppView.php

*A classe entidade reprersenta um registro do banco*

*A ORM do CakePHP nos permite fazer consultas, adicionar dados, alterar apenas com metodos, pois a ORM faz todas as consultas SQL*

## Aula 4

*Editar a página inicial da aplicação, alterar barra (/)*
* config/routes.php

## Aula 6

*Flash Scope é para exibir uma mensagem que dura um requisição. Ao atualizar a página ela some*

*Alterar estilo Flash Scope*
* Template/Element/Flash

## Aula 7

*Criando tabela users*
* `$ create table users (id int not null auto_increment primary key, 
		username varchar(255) not null, 
		password varchar(255) not null
	);`

*Inserindo em users*
* `$ insert into users (username, password) values ('admin', 'admin');`

*No cake a convenção para se fazer um sistema de login é que os usuários fiquem dentro da tabela users e essa tabela precisa um campo de usuário (username) e senha (password), então por padrão criar dessa forma sistema de login no CakePHP*

*Para sistema de login (autenticação) alterar o AppController*

*Quando o usuário não está autorizado a acessar uma página, o cake procura um controller chamado users e uma ação login*

*Quanod se ativa o componete de aplicação, por padrão se é bloqueado a aplicação interia com exceção ao formulário de login*

*O CakePHP por padrão não deixa trabalharmos sem criptográfia dos dados*