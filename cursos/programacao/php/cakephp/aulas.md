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
