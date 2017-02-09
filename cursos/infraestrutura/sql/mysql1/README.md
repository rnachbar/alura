# MySQL I

## Dependências
* [MySQL](http://mysql.com/downloads/mysql)

## Download e instalação do MySQL no Windows

* [Tutorial Alura](https://cursos.alura.com.br/course/introducao-a-banco-de-dados-e-sql/task/5652)
* Na página de downloads do MySQL, realize o download do MySQL Installer
* Na próxima página você terá duas opções: o arquivo de menor tamanho irá realizar o download do que for necessário apenas no momento da instalação; o de maior tamanho irá conter tudo que é necessário para instalar. Aqui vamos baixar o arquivo maior.
* Mais uma página será exibida, você deve clicar em "No thanks, just start my download.", e o download do arquivo irá iniciar.
* Execute o arquivo baixado. Na primeira tela, marque o checkbox para aceitar a licença e clique em "Next".
* Na próxima tela, você pode marcar a opção "Server only". Isso é suficiente para realizar as atividades do curso.
* Agora você deve clicar em "Execute" para iniciar a instalação. Após o processo ser concluído clique em "Next".
* Nas próximas duas tela também clique em "Next".
* Agora será necessário definir uma senha para o usuário root. Após digitar a mesma senha nos dois campos clique em "Next".
* A próxima tela diz respeito ao serviço do mysql. Aqui você pode manter as opções padrões e apenas clicar em "Next".
* Agora clique em "Execute" para que as configurações sejam aplicadas.
* Clique em "Finish" para finalizar a intalação.

## Adicionando o MySQL a variável de ambiente Path

* O MySQL foi instalado, mas se tentarmos executar o comando `$ mysql` no Prompt de Comando do Windows, receberemos uma mensagem informando que o comando não é reconhecido.
* Para que seja possível executar o comando `$ mysql` no Prompt de Comando a partir de qualquer diretório, precisamos configurar as variáveis de ambiente do Windows.
* No Windows 10, Acesse o seguinte menu. Em versões anteriores do Windows, você pode clicar com o botão direito em "Computador", no menu iniciar, e escolher a opção "propriedades". Você também pode utilizar o atalho "Tecla do Windows (tecla Super) + Pause Break".
* Na tela que será exibida, clique em "Configurações avançadas do sistema".
* Na janela propriedades so sistema, na aba "Avançado", clique em variáveis de ambiente.
* Em "Variáveis do sistema", selecione a variável "Path" e clique em editar. Não crie uma nova variável.
* Os diretórios que estão definidos na variável Path são diretório em que os comandos que digitamos no terminal são procurados. Por esse motivo vamos inserir o caminho do diretório do MySQL nessa variável.
* Na janela que irá aparecer, clique no botão "Novo" e adicione o caminho para o diretório bin do MySQL. Por padrão o MySQL fica no diretório C:\Arquivos de Programas\MySQL\MySQL Server 5.7. Você deve checar onde o seu MySQL foi instalado e alterar o caminho de acordo com sua instalação. Lembre-se que desejamos adicionar o diretório bin, onde ficam os executáveis do MySQL.
* Em versões anteriores do Windows, ao editar a variável Path, será mostrada apenas uma janela onde vários caminhos estão definidos, separados por ponto e vírgula. Você deve adicionar um ponto e vírgula no final e adionar o diretório do MySQL.
* Finalize clicando no botão "OK" em todas as janelas.
* Abra o prompt de comando e tente executar o seguinte comando para acessar o mysql. Digite o comando e pressione "Enter": mysql -u root -p
* Digite a senha escolhida e pressione "Enter".
* Isso é tudo! O MySQL está instalado e configurado.


