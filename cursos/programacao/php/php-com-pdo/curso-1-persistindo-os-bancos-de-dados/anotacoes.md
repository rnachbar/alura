# Anotações do curso PHP com PDO parte 1: Persistindo os bancos de dados

* O PDO possui a grande vantagem de realizar a abstração da conexão com o banco de dados. Significa que, após esta conexão, tudo aquilo que será feito é igual para qualquer banco de dados. Ou seja, não teremos métodos específicos para o MySQL, o Oracle ou o SQL Server. Basta informarmos durante a conexão qual o sistema de banco de dados a que nos conectamos para que todo o código permaneça inalterado.

* Para conectar o banco via PDO:

```php
	$conexao = new PDO('[drive]:host=[host];dbname=[database]', '[usuario]', '[senha]');
```

* Passamos a string de conexão com o banco de dados, onde nela, informamos o drive de conexão [drive], o hostname ou IP do servidor no qual o banco de dados encontra-se [host] e o database no qual, queremos efetuar a conexão [database]. Além de passar como parâmetros adicionais, o usuário que será usado para efetuar a conexão e como parâmetro opcional, a senha deste usuário.

* Utilizar a tag `<pre>` do HTML junto do comando `print_r` do PHP para exibir as informações de forma organizada na tela.
```php
	echo '<pre>';
	print_r($variavel);
	echo '<pre>';
```

* O método construtor sempre é executado quando a classe é instanciada.

* O define() do PHP cria um objeto/variável com valor fixo.

* Com o Autoload do PHP sempre que uma classe for requisitada/instanciada, se essa classe não existir no contexto do arquivo que ele está o PHP vai chamar uma função e essa função vai verificar se essa classe existe e se ela existir será feito um require_once do arquivo dentro dessa função.
