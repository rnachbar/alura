# Arquivo ensinando como instalar e executar o PHP direto do prompt de comando + instalação do banco de dados

# Instalação do PHP

## Windows

* Acesse o link do [site do PHP](https://secure.php.net/downloads.php), na versão **Current Stable PHP**, selecione a opção **Windows Download** e, depois, baixe a versão **Non Thread Safe** equivalente ao tipo de arquitetura do seu Sistema Operacional, que pode ser x86 ou x64.

* Uma vez baixado o zip, sugiro descompactar a pasta na raiz do seu drive C e renomeá-la para php.

* Assim, precisaremos também colocar esse diretório no path do Windows, processo necessário para podermos usar o comando php em qualquer diretório do Sistema.

* Para isso, acesse o **Painel de Controle do Windows** e clique em **Sistemas**. Na janela que se abriu, procure no menu lateral esquerdo a opção **Configurações Avançadas do Sistema**. Na nova janela, clique no ultimo botão chamado **Variáveis de Ambiente**.

* Na seção **Variáveis do Sistema**, procure pela **path** e clique em **editar**. Uma lista com muitas variáveis se abrirá. Clique no botão **Novo** e, no novo campo que vai se abrir no final da lista, coloque o caminho do diretório da sua instalação do PHP, que se for como colocado aqui, será **C:\php**.

* Feito isso, clique em **OK**, **OK** novamente e, por fim, **OK**. =)

* Pronto! Para ver se tudo está funcionando, você pode abrir o prompt de comando do windows e digitar `$ php -v`.

## Linux (Distribuição baseada no Debian)

* Para instalar o PHP no Linux (uma distribuição baseada no Debian como o Ubuntu, por exemplo), abra o terminal e digite o seguintes comandos:

* `$ sudo apt-get update`
* `$ sudo apt-get install libapache2-mod-php7.0 php7.0-mysql php7.0-curl php7.0-json php-memcached php7.0-dev php7.0-mcrypt php7.0-sqlite3 php7.0-mbstring`

* Para ver se funcionou, após a instalação, basta digitar no terminal `$ php -v`.

## Mac OS X

* Para instalar o PHP no Mac OS X, abra o terminal e digite o seguinte comando:

* `$ curl -s https://php-osx.liip.ch/install.sh | bash -s 7.1`
* `$ export PATH=/usr/local/php5/bin:$PATH`

# Instalação do MariaDB

## Windows

* Para instalar o MariaDB no Windows, é muito simples: basta [baixar o instalador](https://downloads.mariadb.org/interstitial/mariadb-10.2.9/winx64-packages/mariadb-10.2.9-winx64.msi/from/http://mirror.ufscar.br/mariadb/) e seguir o passo a passo. Lembre-se de que é no processo de instalação que você vai definir a senha do banco de dados.

## Linux (Distribuição baseada no Debian)

* Para instalar o MariaDB no Linux, abra um terminal e use os seguintes comandos:

* `$ sudo apt-get update`
* `$ sudo apt-get upgrade`
* `$ sudo apt-get install software-properties-common`
* `$ sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xF1656F24C74CD1D8`
* `$ sudo add-apt-repository 'deb [arch=amd64,i386,ppc64el] http://ftp.utexas.edu/mariadb/repo/10.1/ubuntu xenial main`
* `$ sudo apt-get update`
* `$ sudo apt-get install mariadb-server`

## Mac OS X

* Para instalar o MariaDB no Mac OS X, abra o terminal e digite o seguinte comando:
* `$ brew install mariadb`

* E, depois da instalação, você pode ativar o MariaDB com o comando:
* `$ mysql.server start`

# Executar o PHP

* Abra o terminal do Windows, ou qualquer outro de sua preferência e navegue até a pasta do projeto.

* Para que o servidor web funcione, usaremos o comando `$ php -S 127.0.0.1:8888` (ou `$ php -S localhost1:8888`) passando como parâmetros o IP e a porta (porta de sua preferência) para o qual queremos que o servidor suba, no caso, a mesma máquina que estamos utilizando, ou o IP local.