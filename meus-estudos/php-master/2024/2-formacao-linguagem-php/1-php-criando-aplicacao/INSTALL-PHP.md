# Instalando PHP no Windows

Agora vamos ver como fazer no Windows, que é um pouco mais complicado. Vamos acessar php.net no navegador, e isso vai abrir o site oficial do PHP.

Nele, conseguimos ver que a versão mais recente é 8.3. E mais uma vez, se a versão mais recente for outra, pode baixar a mais recente sem problema.

Agora vamos acessar a página de Download. Aqui temos algumas opções, e no topo estar sempre a mais recente. Então, nessa versão do topo, vamos acessar o link de Windows downloads (Downloads para Windows).

Ele vai abrir uma outra página, já com essa versão mais recente, com algumas opções, e vamos baixar essa primeira opção, que é um arquivo Zip. Aqui temos um arquivo zip mostrando o tamanho desse download, é ele que vamos baixar. Não precisa se atentar a esses detalhes de vs16, x64, "Non Thread Safe", não precisa se atentar a isso. Por padrão, você vai sempre baixar essa primeira opção, com o zip.

Feito o download, acessaremos o arquivo na minha pasta de downloads. Vamos simplesmente extrair o arquivo compactado clicando sobre ele e selecionando a opção Extrair Tudo no menu superior do Explorador de Arquivos. Em seguida, vamos clicar em Extrair, que extraíra os arquivos nessa mesma pasta.

Acessaremos a pasta com os arquivos extraídos e nela temos um arquivo chamado php.exe. Nessa pasta temos nosso PHP. Então poderíamos tentar abrir o terminal, por exemplo, clicando aqui no menu Iniciar, vamos digitar cmd, ele abre o Prompt de Comando.

Poderíamos tentar digitar php -v, igual fizemos lá no Linux, só que isso ainda não vai encontrar o PHP. Por quê? O Windows não sabe que ele precisa encontrar o PHP nessa pasta que acabamos de extrair.

Então o que vamos fazer? No topo, onde temos o nome da pasta, vamos clicar e copiar esse caminho completo da pasta. Agora vamos abrir nosso menu Iniciar e pesquisar por variáveis de ambiente. E uma das opções que aparecerá é Editar as variáveis de ambiente do sistema.

Ao selecioná-la, isso vai abrir uma janela, vamos clicar num botão chamado variáveis de ambiente. Agora temos as opções das variáveis de ambiente para o nosso usuário e do sistema como um todo. Você pode editar o que você preferir, vamos editar a do nosso usuário e não do sistema todo.

Aqui temos uma variável chamada path. Vamos clicar em cima dessa variável e clicar no botão Editar, logo abaixo da lista de variáveis.

Agora temos uma lista de caminhos de pastas onde o Windows procura pelos comandos que digitamos. Então aqui vamos clicar em Novo para adicionar um novo caminho e vamos colar aquele que copiamos. Então vamos dar Enter e clicar em Ok três vezes para fechar todas as janelas abertas.

Agora vamos abrir um novo terminal. Então abrimos o menu Iniciar de novo, procuramos o Prompt de Comando e digitamos cmd. Não pode ser naquele mesmo terminal, senão ele não vai ter essa variável de ambiente atualizada. E agora digitamos php -v e temos lá o PHP instalado na sua versão 8.3. Agora o nosso ambiente no Windows está completo.
