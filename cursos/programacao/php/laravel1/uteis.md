# Instalação / Iniciando projeto 

* `$ composer global require "laravel/installer"`
* `$ laravel new nome_projeto`

### OU

* `$ composer create-project --prefer-dist laravel/laravel nome_projeto`

* [Documentação](https://laravel.com/docs/5.6#installation)

# Rodando Server Local (artisan)
* `$ cd nome_projeto`
* `$ php artisan serve`
* Acessar Laravel development server started: <> no navegador

# Alterando o namespace padrão com Artisan
* `$ php artisan app:name nome_projeto`

# Alterando Rotas (routes)
* Alterar /routes/web.php

# Criando Controllers
* Criar em /Http/Controllers

# Configurando Banco
* Alterar em /config/database.php (alterar dependendo do banco)
* Invés de alterar o database.php podemos alterar o arquivo .env para setarmos os acessos do banco de dados
```php
	DB_CONNECTION=mysql
	DB_HOST=host_banco
	DB_PORT=3306
	DB_DATABASE=nome_banco
	DB_USERNAME=user_banco
	DB_PASSWORD=senha_banco
```
* Após alterar o arquivo .env é necessário reiniciar o servidor por questões de cache
* Caso chace permaneça rodar `$ php artisan config:clear`

# .env
* Arquivo para configuração de bugs, configuração de banco

# Dump variável 
* Comando dd() faz um dump da variável em Laravel
