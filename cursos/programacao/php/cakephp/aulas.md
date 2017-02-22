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

*Editar a página inicial da aplicação, alterar barra (/)*
* config/routes.php