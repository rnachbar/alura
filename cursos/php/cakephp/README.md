# Curso CakePHP

## Tecnologias  
* Framework CakePHP 3.3
* Banco MySQL

## Observações  
Sempre realizar dump atualizado do banco de dados 

## Dependências
*Lista das dependências do projeto com instruções de instalação* 

* [Composer](https://getcomposer.org/)
* [CakePHP Framework](https://cakephp.org/)

## Instalação do Composer
* `$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
* `$ php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`
* `$ php composer-setup.php`
* `$ php -r "unlink('composer-setup.php');"`

## Instalação do CakePHP e projeto
* `$ composer self-update && composer create-project --prefer-dist cakephp/app estoque`
