# Aula 1 - Introdução e Instalação do Python 3

## Introdução

Olá, bem vindo à Alura, ao nosso primeiro curso sobre Python na versão 3. Nesse curso introdutório, vamos implementar um jogo para começar a programar com Python. É um jogo de adivinhação, onde o computador vai escolher um número e o usuário precisa adivinhá-lo.

Vamos aprender a trabalhar com variáveis de diversos tipos, como gerar um número aleatório, como tomar decisões através de if else, pois o computador dará uma dica para nós, se o número é menor ou maior. O jogo tem várias rodadas, então existe a necessidade de repetir uma parte do código. É preciso ler a entrada do usuário e mostrar o resultado para o jogador.

Enfim, nesse curso teremos vários desafios a resolver e eu convido você a me acompanhar nessas próximas aulas, para aprender essa linguagem fantástica e se divertir muito com Python 3.

## Instalando o Python no Windows

Nesse vídeo veremos como instalar o Python no Windows. O primeiro passo é acessar o site do Python: https://www.python.org/. Na sessão de Downloads, automaticamente já será disponibilizado o instalador específico do Windows, portanto é só baixar o Python 3, na sua versão mais atual.

Instalando o Python
Após o download ser finalizado, abra-o e logo na primeira tela é importante marcar a checkbox Add Python 3.5 to PATH. Essa opção é importante para conseguirmos executar o Python dentro do Prompt de Comando do Windows.

Vamos selecionar a instalação customizada somente para vermos a instalação com mais detalhes. Na segunda tela, podemos clicar em Next. Já na terceira tela, também vamos deixar como está, mas vamos nos atentar ao diretório de instalação do Python, para caso queiramos procurar o executável, ou algo que envolva o seu diretório. Visto isso, podemos clicar Install e aguardar o término da instalação.

Testando o Python
Terminada a instalação, podemos testar se o Python foi instalado corretamente. Podemos abrir o Prompt de Comando e executar o seguinte comando:

python -V
Esse comando imprime a versão do Python instalada no Windows. Se a versão for impressa, significa que o Python foi instalado corretamente. Logo, se rodarmos o comando python, teremos acesso ao Prompt do próprio Python, conseguindo assim utilizá-lo.

Outras formas de utilizar o Python
Podemos rodar o Python diretamente do seu próprio Prompt. Podemos procurar pelo Python na caixa de pesquisa do Windows e abri-lo, assim o seu console próprio será aberto.

Uma outra forma é abrir a IDLE do Python, que se parece muito com o console, mas com um menu, que possui algumas opções extras

## Instalando em outras plataformas

Os sistemas operacionais baseados no Debian já possuem o Python 3 pré-instalado, mas o comandos para instalá-lo pelo terminal é:

sudo apt-get update
sudo apt-get install python3

Assim como no Windows, você pode verificar se o Python 3 está instalado executando o seguinte comando:

python3 -V

E para executar o Python 3, basta rodar o comando python3 no terminal.

Instalando o Python no MacOS
Para instalar o Python 3 no MacOS, temos duas opções, através do Homebrew, fazemos:

brew update
brew install python3

Mas caso você não utiliza o Homebrew, podemos baixar o instalador do Python através do seu site oficial. Assim como no Windows, na sessão de Downloads, o site automaticamente já detectará o seu sistema operacional e disponibilizará o instalador específico para o seu MacOS, portanto é só baixar o Python 3, na sua versão mais atual.

E assim como nos sistemas baseados no Debian, verificamos a versão do Python com o seguinte comando:

python3 -V

E o executamos rodando o comando python3 no terminal.

## Usar o Python sem instalá-lo

Também conseguimos utilizar o Python sem instalá-lo na nossa máquina, executando-o através de um serviço na web. Há vários sites que disponibilizam esse serviço, entre eles o repl.it. Nele podemos programar em várias linguagens, para começar basta clicar em Start coding now! e escolher o Python3.

À esquerda escrevemos o código em Python e à direita é a saída. Podemos testar esse serviço, imprimindo uma mensagem:

print("ola aluno! bem vindo!!")

Ao clicar em run, a mensagem é impressa à direita.

É uma boa alternativa caso não tenhamos o Python instalado localmente, mas é bom ter em mente que em algum momento a instalação local será necessária :)

## Função print e variáveis

Antes de criarmos um projeto, veremos como trabalhar no console do Python.

A função print
Já vimos no vídeo anterior como imprimir uma mensagem:

>>> print("ola mundo")
ola mundo
Vamos analisar mais a fundo essa função. No console do Python temos uma função de ajuda, a função help():

>>> help()
Podemos reparar que um novo console aparece:

help>

Agora, como queremos saber mais sobre a função print, vamos digitá-la:

help(print)

Documentação da função print

Inicialmente, o que nos importa são os três primeiros valores que a função print pode receber:

value é o valor que queremos imprimir, as reticências indicam que a função pode receber mais de um valor, basta separá-los por vírgula.
sep é o separador entre os valores, por padrão o separador é um espaço em branco.
end é o que acontecerá ao final da função, por padrão há uma quebra de linha, uma nova linha (\n).
Podemos apertar a tecla Q para sair da documentação da função e CTRL + C ou CTRL + D para sair do console de ajuda do Python. De volta ao console do próprio Python, podemos testar a função print com os valores que vimos:

>>> print("Brasil", "ganhou", 5, "titulos mundiais", sep="-")
Brasil-ganhou-5-titulos mundiais
Como modificamos o separador, agora os valores são separador por um hífen. Vamos testar o end agora, não passando nada para ele:

>>> print("Brasil", "ganhou", 5, "titulos mundiais", end="")
Brasil ganhou 5 titulos mundiais>>>
Uma nova linha não é criada, ou seja, o que colocarmos dentro do end será impresso ao final da função.

Variáveis

Agora queremos flexibilizar a função, queremos poder imprimir outros países, como Itália, Alemanha, Argentina... Para isso teremos que mudar o nome do país e o número de títulos conquistados. Então vamos definir o valor com o nome do país fora da função print. Vamos definir uma variável para o nome do país, já que o seu valor pode variar:

>>> pais = "Italia"
Definimos uma variável e atribuímos a ela um valor. Assim como fizemos com o nome do país, vamos fazer também com a quantidade de títulos:

>>> pais = "Italia"
>>> quantidade = 4
Com as variáveis definidas, podemos refazer a função print, só que dessa vez passando as variáveis no lugar dos antigos valores:

>>> pais = "Italia"
>>> quantidade = 4
>>> print(pais, "ganhou", quantidade, "titulos mundiais")
Italia ganhou 4 titulos mundiais
Agora a mensagem é impressa no mesmo molde da anterior, só que dessa vez com variáveis! Mas qual é o tipo dessas variáveis? O tipo da variável depende do valor que passarmos para ela. Podemos "perguntar" para a variável qual é o seu tipo, passando-a para a função type:

>>> type(pais)
<class 'str'>
>>> type(quantidade)
<class 'int'>
O valor str significa que a variável é do tipo string, já que o seu valor está entra aspas duplas. E int significa que a variável é do tipo inteiro, já que passamos um valor inteiro para a variável.

Veremos mais sobre os tipos das variáveis no próximo vídeos, até lá!
