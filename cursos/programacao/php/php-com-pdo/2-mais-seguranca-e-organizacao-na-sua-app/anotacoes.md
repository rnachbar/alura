# Anotações do curso PHP PDO parte 2: Mais segurança e organização na sua app

* Informação **mocada** é quando é uma informação fixa no html, não sendo algo dinâmico, só para você poder ter uma visão do front-end com os dados.

* Nome da classe sempre tendo o mesmo nome do arquivo para o `AUTOLOADER` funcionar corretamente e por questão de padronização.

* O método estático é o método que não se relaciona com nada mais da nossa classe/objeto. Ele não faz referencia a outros métodos/objetos ou atributos dos objetos

* O método PREPARE também retorna um PHPStatement, mas mas retorna um PHPStatement preparado para execução, quando o método QUERY retorna o PHPStatement já xecutado.

* Com a utilização do bindValue, já são feitas validações previnindo o SQL Injection.

* `or1=1` - SQL INJECTION

Nessa aula, fizemos o uso da técnica de Lazy Loading criando o método carregarProdutos() dentro da classe Categoria. Qual a vantagem de se usar essa técnica quando trabalhamos com relacionamento de entidades de 1 para N?

Abstraindo nossa classe Categoria, utilizando Lazy Loading para carregar os produtos, deixamos nosso código mais otimizado.

 
Não é sempre que vamos precisar saber os Produtos de uma determinada categoria, então, não precisamos sempre, carregar essas informações. Com Lazy Loading, só temos os produtos da categoria, apenas quando precisamos deles, usando o método responsável por carregar essas informações dentro do objeto.
