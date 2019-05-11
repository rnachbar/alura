# Aula 1 - Introdução e Instalação do Python 3

## 01 Introdução

Olá, bem vindo à Alura, ao nosso primeiro curso sobre Python na versão 3. Nesse curso introdutório, vamos implementar um jogo para começar a programar com Python. É um jogo de adivinhação, onde o computador vai escolher um número e o usuário precisa adivinhá-lo.

Vamos aprender a trabalhar com variáveis de diversos tipos, como gerar um número aleatório, como tomar decisões através de if else, pois o computador dará uma dica para nós, se o número é menor ou maior. O jogo tem várias rodadas, então existe a necessidade de repetir uma parte do código. É preciso ler a entrada do usuário e mostrar o resultado para o jogador.

Enfim, nesse curso teremos vários desafios a resolver e eu convido você a me acompanhar nessas próximas aulas, para aprender essa linguagem fantástica e se divertir muito com Python 3.

## 02 Instalando o Python no Windows

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

## 03. Instalando em outras plataformas

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

## 04. Usar o Python sem instalá-lo

Também conseguimos utilizar o Python sem instalá-lo na nossa máquina, executando-o através de um serviço na web. Há vários sites que disponibilizam esse serviço, entre eles o repl.it. Nele podemos programar em várias linguagens, para começar basta clicar em Start coding now! e escolher o Python3.

À esquerda escrevemos o código em Python e à direita é a saída. Podemos testar esse serviço, imprimindo uma mensagem:

print("ola aluno! bem vindo!!")

Ao clicar em run, a mensagem é impressa à direita.

É uma boa alternativa caso não tenhamos o Python instalado localmente, mas é bom ter em mente que em algum momento a instalação local será necessária :)

## 05. Função print e variáveis

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

## 06. Imprimindo uma mensagem na tela

Qual é a função utilizada para imprimir algo na tela?
print()

A função é a print(). Basta passar a mensagem por parâmetro para a função, que a mensagem será impressa. Ela inclusive apareceu várias vezes no vídeo!

## 07. Personalizando a saída

Veja o código a seguir:

```python
subst = "Python"
verbo = "é"
adjetivo = "fantástico"
print(subst, verbo, adjetivo, sep="_", end="!\n")
```

Qual será a saída do comando print?
Python_é_fantástico!

Repare que usamos o parâmetro `sep="_"` para definir um _ entre cada valor, por isso é impresso:

Python_é_fantástico

Além disso, definimos através do end para imprimir uma exclamação (!), seguida pelo `\n`:

end="!`\n`"

Lembrando que o `\n` é um caractere especial, que faz com que o novo prompt comece em uma nova linha.

Com isso recebemos a saída:

Python_é_fantástico!

## 08. Imprimindo datas

Para representar uma data, temos as variáveis dia, mes e ano:

>>> dia = 15
>>> mes = 10
>>> ano = 2015

Sem alterar as variáveis e sem passar nenhuma string adicional à função print(), como faríamos para ter como resultado a impressão, de uma data formatada:

15/10/2015

Podemos alterar o separador entre os valores que a função print() recebe, utilizando o parâmetro sep, que por padrão é um espaço em branco. Basta utilizá-lo, dizendo que seu valor será uma barra (/):

>>> dia = 15
>>> mes = 10
>>> ano = 2015

>>> print(dia, mes, ano, sep="/")
15/10/2015

## 09. Tipagem do Python

Ainda no console do Python, vimos no vídeo anterior que uma variável sempre terá um tipo associado:

>>> pais = "Brasil"
>>> type(pais)
<class 'str'>

Mas em nenhum local definimos explicitamente que a variável pais receberá valores do tipo string. Talvez você já tenha visto isso em outras linguagens, como C, C++, Java, em que definimos o tipo da variável na hora da sua declaração, algo como:

>>> str pais = "Brasil"

Mas isso em Python não funciona. Ou seja, no mundo Python não somos obrigados a definir explicitamente o tipo da variável. Podemos até passar outros tipos de valores para a variável:

>>> pais = "Brasil"
>>> type(pais)
<class 'str'>
>>> pais = 644
>>> type(pais)
<class 'int'>

Além de funcionar, o tipo da variável também muda! O tipo da variável mudou dinamicamente, de acordo com o valor que é atribuído a ela, logo, o tipo da variável é definido de acordo com o valor que ela guarda, isso faz parte da tipagem dinâmica do Python.

Agora temos tudo para começar o nosso projeto no próximo capítulo!

## 10. Qual o tipo da variável?

Temos a seguinte variável, que representa o preço de um produto:
preco = 49.90
Qual será o tipo da variável preco? Faça o teste!

float

O valor 49.99, é um número decimal, ou seja, com um ponto flutuante, por isso em Python o seu tipo será o float. Podemos verificar isso no console do Python:

>>> preco = 49.99
>>> type(preco)
<class 'float'>

## 11. Tipagem de variáveis

Sabendo que o Python usa uma tipagem dinâmica, qual alternativa abaixo é correta?

Uma variável só passa a existir quando atribuímos um valor.

Correto, é preciso atribuir um valor para inicializar uma variável, definindo assim o seu tipo.

Não há declaração de variáveis estáticas em Python, como em linguagens como C, Java ou C#. Nessas linguagens, indicamos o tipo e o nome das variáveis e ela já passa a existir.

Por exemplo:

int idade;

Repare que só declaramos o tipo e o nome da variável, sem ter atribuído o valor.

Em Python, a variável só passa a existir quando atribuímos um valor, como no exemplo abaixo:

idade = 12

Isso faz todo sentido, já que não temos uma declaração explícita do tipo, como na linguagem Java ou C#. O interpretador do Python não tem como assumir um tipo.

## 12. Para saber mais: Snake_Case

O Python utiliza por convenção o padrão Snake_Case para nomes de variáveis (ou identificadores).

Um exemplo de variáveis em Snake_Case são:

``` python
idade_esposa = 20
perfil_vip = 'Flávio Almeida'
recibos_em_atraso = 30
```

Em outras linguagens também se usa o padrão CamelCase. O mesmo exemplo com CamelCase (que não é o padrão do Python):

``` python
idadeEsposa = 20
perfilVip = 'Flávio Almeida'
recibosEmAtraso = 30
```

Vamos seguir o padrão do Python nesse curso, que é o Snake_Case!

# Aula 2 - Lidando com a entrada do usuário

## 01. Instalando e conhecendo o PyCharm

No capítulo anterior fizemos os primeiros passos com o Python, desde a sua instalação e até vimos um pouco da sua sintaxe no console. Mas para escrever uma aplicação completa, utilizando o console, não parece ser uma boa ideia. Podemos ter um editor de texto que nos auxilie nessa programação, nos permitindo trabalhar com vários arquivos, auxiliando a nossa vida.

Há várias opções de editores de texto no mercado, entre elas o Atom e o Sublime Text. Apesar de esses editores nos ajudarem a escrever o código, eles não são focados no Python, e sim em dar suporte a várias linguagens. Então, vamos utilizar uma ferramenta (IDE, do inglês Integrated Development Environment) só focada para o Python, assim como existe o Eclipse para o Java.

Instalando o PyCharm
Uma IDE que é voltada exclusivamente para o Python é o PyCharm, e é ela que iremos utilizar aqui no treinamento. A sua instalação é bem simples, basta acessar a sessão de Download do site oficial, baixar e instalar a versão Community da IDE, já que a versão Professional é paga.

Conhecendo o PyCharm e criando o primeiro projeto
Após instalar o PyCharm, vamos abri-lo e criar o nosso primeiro projeto, clicando em Create New Project. Na tela que irá se abrir, nos é perguntado a localização do projeto e a versão do Python. Vamos criar o projeto jogos, dentro da pasta PycharmProjects mesmo, e nos atentar à versão do Python (caso você tenha mais de uma versão instalada) ela deve ser a versão 3.

O projeto ficará sendo exibido na esquerda, e para criar o primeiro arquivo Python dentro dele, basta clicar com o botão direito do mouse em cima dele e clicar em New -> Python File, vamos colocar o nome do arquivo de adivinhacao.py.

A fim de testes, vamos imprimir uma mensagem simples:

print("Bem vindo ao jogo de Adivinhação!")
Para executar o arquivo, clicamos em Run -> Run... no menu superior, e selecionamos o arquivo que acabamos de criar. O console do PyCharm é aberto e exibe a saída do nosso programa, que é a mensagem Bem vindo ao jogo de Adivinhação!.

Em uma só tela, conseguimos ver os arquivos do projeto, o seu código fonte e o console, que exibe a saída do programa que for executado. Há vários outros recursos que ainda veremos mais à frente, mas o primeiro passo foi realizado!

## 02. Mão na massa: Primeiro projeto com PyCharm

Instalando o PyCharm

Baixe o PyCharm no [site oficial](https://www.jetbrains.com/pycharm/). É importante escolher o seu sistema operacional e usar a versão Community da IDE. Após download instale o PyCharm no seu computador.

Criando o primeiro projeto

Abra o PyCharm e defina o diretório e o nome do projeto no campo Location. Para o nosso curso, vamos usar o nome jogos:

Projeto

Agora crie o primeiro arquivo Python. Clique com o botão direito do mouse em cima do projeto e selecione New -> Python File:

Chame o arquivo de adivinhacao.py:

No arquivo, coloque uma mensagem simples:

print("Bem vindo ao jogo de Adivinhação!")

Agora rode o primeiro programa em Python, clicando em Run -> Run... no menu superior:

O console do PyCharm é aberto e exibe a saída do nosso programa:

## 03. Comparando variáveis

A ideia do nosso jogo é termos que acertar um número secreto. Quando o programa estiver rodando, teremos que digitar um número e o programa dirá se acertamos ou erramos o número, com várias tentativas e níveis.

Vamos começar definindo esse número secreto (mais à frente vamos ver como gerar um número aleatório):

print("*********************************")
print("Bem vindo ao jogo de Adivinhação!")
print("*********************************")

numero_secreto = 42

Capturando a entrada do usuário

Agora, para que o usuário possa digitar o número, vamos utilizar a função input, ela trava o programa até que o usuário digite algo e tecle ENTER. Ela recebe por parâmetro a mensagem que será exibida no console e nos retorna o que o usuário digitou, logo vamos guardar esse resultado em uma variável, que chamaremos de chute:

print("*********************************")
print("Bem vindo ao jogo de Adivinhação!")
print("*********************************")

numero_secreto = 42

chute = input("Digite o seu número: ")

Para testar, vamos ao final do programa imprimir o conteúdo da variável chute, para mostrar realmente que o seu conteúdo será o que o usuário digitou:

print("*********************************")
print("Bem vindo ao jogo de Adivinhação!")
print("*********************************")

numero_secreto = 42

chute = input("Digite o seu número: ")
print("Você digitou: ", chute)

Podemos rodar o programa e ver que realmente é impresso o valor que digitarmos.

Comparando valores

Agora que conseguimos capturar o que o usuário digitou, precisamos comparar esse valor com o número secreto, para poder dizer ao usuário se ele digitou o número correto ou não. Bom, já sabemos o número secreto que o chute do usuário, então vamos comparar os dois, algo como:

se numero_secreto igual chute
    print("Você acertou!")
senão
    print("Você errou!")

Só que as palavras se, senão e igual não funcionam no mundo Python, temos que respeitar a sua sintaxe. O se em Python é if, o igual é a comparação == e o senão é else. Então, resumindo a sintaxe do Python é:

if (condição):
    executa código caso a condição seja verdadeira
else:
    executa código caso a condição seja falsa

Mas precisamos prestar atenção a alguns detalhes. É uma recomendação que a condição fique dentro de parênteses (apesar de também funcionar sem); para marcar o fim da instrução e início de um bloco (o código que será executado caso a condição seja verdadeira ou falsa), é utilizado dois pontos (:), e esse bloco obrigatoriamente deve estar 4 espaços (ou um TAB) mais à direita. Então o código ficará assim:

if (numero_secreto == chute):
    print("Você acertou!")
else:
    print("Você errou!")

Podemos rodar o programa e verificar que mesmo se digitarmos o número certo, recebemos a mensagem Você errou. Porque?

Convertendo uma string para número inteiro
Isso acontece porque a função input nos retorna uma string, pois qualquer coisa pode ser digitada, não é garantido que o usuário irá digitar um número. Como não há essa garantia, o retorno é uma string.

Já a variável numero_secreto é um número! Logo, do tipo inteiro. Então estamos testando a igualdade de um inteiro com uma string, logo essa comparação sempre será falsa, apesar da string representar um número inteiro. Para resolver isso precisamos mudar o tipo da variável, convertendo uma string em número inteiro.

Para isso, o Python possui a função int, que recebe um valor e o converte para inteiro, justamente o que queremos. Logo, vamos utilizá-la no nosso código:

print("*********************************")
print("Bem vindo ao jogo de Adivinhação!")
print("*********************************")

numero_secreto = 42

chute_str = input("Digite o seu número: ")
print("Você digitou: ", chute_str)
chute = int(chute_str)

if (numero_secreto == chute):
    print("Você acertou!")
else:
    print("Você errou!")
    
Agora a comparação é feita corretamente! Para sair do bloco do else, basta escrevermos algo depois dele, sem a indentação de 4 espaços:

print("*********************************")
print("Bem vindo ao jogo de Adivinhação!")
print("*********************************")

numero_secreto = 42

chute_str = input("Digite o seu número: ")
print("Você digitou: ", chute_str)
chute = int(chute_str)

if (numero_secreto == chute):
    print("Você acertou!")
else:
    print("Você errou!")

print("Fim do jogo")
