# Aula 1

* `$ pwd` informa qual o diretório que esta
* `$ ls` lista os arquivos e pastas do diretório
* `$ echo "Bem vindo" > bemvindo.txt` redireciona o texto para o arquivo
* `$ cat bemvindo.txt` le o arquivo no terminal
* `$ clear` limpa tela do terminal
* `$ ls -l` mostra informações sobre diretórios e arquivos
* Diretório: drwxr-xr-x - A letra 'd' no inicio indica que é um diretório, sem a letar 'd', indica que seria um arquivo
* `$ ls -la` lista todos os arquivos e diretórios, inclusive os invisíveis
* No linux arquivos e diretórios invisíveis começam com '.'
* `$ man` comando de manual
* `$ man pwd` manual do comando pdw
* `$ whoami` informa o usuário no linux
* `$ cat -n` A opção -n mostra as linhas além de mostrar o conteúdo de um arquivo

# Aula 2

* `$ cd Área\ de\ Trabalho/` cd (change directory) muda de diretório
* `$ >` redirecionamento escreve no arquivo, caso exista ele sobreescreve o arquivo
* `$ echo "AC/DC >>" musicas-favoritas.txt` '>>' concatena, adiciona ao arquivo
* `$ cd ..` volta um diretório
* `$ mkdir workspace` cria diretório
* Usando somente o comando `cd` você volta para o diretório base
* `$ ls /` '/' é a raiz do HD
* `$ ls /home` onde ficam o diretório de cada um dos usuários
* `$ rmdir nomeDiretório` remove diretório
* `$ rm nomeArquivo` remove arquivo
* O comando `rmdir` apaga somente diretórios que estão vázios
* `$ cat arquivo?.txt` le todos os arquivos desse nome com um caracter qualquer no lugar do '?'
* `$ $ cat arquivo*.txt` le todos os arquivos desse nome com qualquer número no lugar de '*'
* `$ cat *.txt` le todos arquivos txt
* `$ rm -r workspace` remove recursivamente o diretório de nome workspace, esse arquivo entra dentro do diretório e sai apagando tudo que tem dentro


# Aula 3

* `$ cp mensagem.txt bem-vindo.txt` copiando arquivo mensagem para bem-vindo
* `$ mv mensagem.txt bem-vindo2.txt` mover arquivo para outro nome (renomear)
* `$ mv bemvindo.txt projetos-java/` movendo para outro diretório
* `$ ls *` exibe tudo, os arquivos da pasta e arquivos das sub pastas
* O comando `cp` não copia diretórios
* `$ cp -r projetos-java projetos-c#` copiar diretórios, usar `cp -r`, recursivo (entra no diretório e executa esse comando)
* `$ zip -r work.zip workspace/` compactando diretório workspace para arquivo work.zip
* `$ unzip -l work.zip` mostra o que tem dentro do nosso arquivo zip
* `$ unzip work.zip` desconpacta arquivo
* `$ unzip -q work.zip` descompacta com -q (quiet), sem exibir informações
* `$ zip -rq work.zip workspace/`


# Aula 4

* `$ tar -cz workspace > work.tar-gz` tar create e zip, o tar por padrão já é recursivo
* `$ tar -xz < wor.tar.gz` tar extract e zip
* `$ tar -czf work.tar.gz workspace/`
* `$ tar -xzf work.tar.gz`
* `$ tar -vxzf work.tar.gz` exibe os logs -v(verbose), -q(quiet)
* `$ tar -cjf work.tar.bz2 workspace/` formato bzip2
* `$ touch bem-vindo.txt` só enconsta no arquivo, atualiza a data sem alterar o conteudo, o touch só encosta no arquivo dizendo que ouve uma modificação nesse arquivo, não modificou o conteudo mas alterar a data de última modificação
* `$ date` data atual do sistema
* `$ head google.txt` tras as 10 primeiras linhas
* `$ head -n 3 google.txt` tras as 3 primeiras linhas
* `$ tail google.txt` tras as ultimas 10 linhas
* `$ tail -n 3 google.txt` tras as ultimas 3 linhas
* `$ less google.txt` abrir o arquivo e navegar com a seta

# Aula 5

* `$ vi google.txt` editar arquivo pelo terminal, para entrar no mode de edição apertar letra 'i', para sair do modo de edição apertar a tecla 'esc' e volta para o modo de navegação (navegar com as setas)
* `$ :w` (write) salva alterações
* `$ :q` (quit) sai do editor
* `$ :wq` para salvar e sair do editor
* `$ i` insere na posição atual (onde o cursor está)
* `$ a` insere na posição seguinte (caracter seguinte)
* `$ x` apaga caracter atual
* `$ 11x` apaga ´11 caracteres
* `$ dd` remove a linha por completo
* `$ 5dd` remove 5 linhas
* `$ :q!` sai sem salvar, ignora as alterações
* `$ A` adiciona no final da linha (A maiusculo)
* `$ G` vai para a última linhas
* `$ 1G` vai para a primeira linha do arquivo
* `$ 3G` vai para a terceira linha do arquivo
* `$ $` vai para o final da linha atual
* `$ 0` volta para o primeiro caracter da linha
* `$ /California` busca por palavra, usando 'n' vai para a próxima ocorencia procurada, 'N' vai para a ocorencia anterior
* `$ yy` copia linha (yanked)
* `$ 5yy` copia 5 linhas
* `$ p` cola (paste)
* `$ 10p` cola 10 vezes
