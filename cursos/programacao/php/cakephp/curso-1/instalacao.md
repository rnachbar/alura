# Cake PHP I

## Dependências
* [CakePHP](https://book.cakephp.org/3.0/en/installation.html)
* [Composer](https://getcomposer.org/download/)

## 1° passo - Instalação do Composer na pasta do projeto

* `$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
* `$ php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`
* `$ php composer-setup.php`
* `$ php -r "unlink('composer-setup.php');"`

## 2° passo - Instalação do Cake e suas dependências

* `$ php composer.phar create-project --prefer-source cakephp/app estoque`

## ERROS

* [ErrorException] ZipArchive::extractTo(C:\Users\Raphael Nachbar\Desktop\DESENVOLVIMENTO\D EV\raphael\alura\cursos\programacao\php\cakephp1\estoque/vendor/composer /b4e67603/robmorgan-phinx-6943cb4\tests\Phinx\Migration_files\reversibl emigrations/20121224200649_rename_info_table_to_statuses_table.php): fai led to open stream: Invalid argument: *Usar `$ --prefer-source` invés de `$ --prefer-dist`*
* Full extraction path exceed MAXPATHLEN (260): *muito afundo na raíz de pastas, muitas subpastas*
