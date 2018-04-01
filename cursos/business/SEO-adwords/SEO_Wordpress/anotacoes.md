# 1. Introdução

## 1.1 Introdução

Olá, tudo bem? Sou o Adriano Almeida e vamos passar algumas horas juntos neste curso de SEO para Wordpress. O que faremos de legal?
Criaremos nosso próprio blog partindo do zero, no qual faremos várias otimizações com objetivo de termos conteúdo de qualidade, um bom ranking, passando por vários "truques" na hora de fazermos o copyright da página e dos textos. Veremos todos os ajustes necessários relacionados a SEO, no que diz respeito a imagens, para evitar links duplicados, assim como várias situações comuns a sites com Wordpress. Durante este curso utilizaremos o famoso plugin Yoast...

Caso haja qualquer dúvida, ela pode ser enviada pelo fórum. Fique à vontade, tanto eu, como os outros instrutores e alunos da Alura estaremos à disposição para te ajudar a aproveitar o conteúdo da melhor forma possível.

Outra dica: se este for seu primeiro contato com SEO, recomendo que você assista antes deste, o curso voltado especificamente para SEO, mais genérico, sem foco em Wordpress. Desta forma, você terá a base necessária para conseguir trabalhar com SEO, e depois, mais especificamente com SEO aplicado ao Wordpress.

Espero que você goste e aproveite!

## 1.2 Preparando o ambiente

Nesse curso nós vamos precisar de um wordpress instalado e pronto para uso. Se você já possui seu próprio site ou blog com wordpress hospedado, você pode utilizá-lo nos exercícios e exemplos desse curso.
Se você ainda não possui um site com wordpress, recomendamos que assista ao curso de wordpress, que vai te ensinar a criar o ambiente e colocar o seu próprio blog no ar com facilidade. Você consegue acessar as aulas de configuração e instalação do wordpress aqui: https://cursos.alura.com.br/course/wordpress-hospedagem-administracao-widgets/task/22290

## 1.3 Para saber mais

Não é um pré-requisito obrigatório, mas para acompanhar melhor esse curso, o ideal é que você já possua uma base de SEO - Search Engine Optimization. Essa base você consegue adquirir nos dois cursos iniciais de SEO que temos na plataforma e seguindo os cursos da Carreira SEO Expert: https://cursos.alura.com.br/career/seo-expert

## 1.4 Conhecendo o Yoast!

Nesse momento você já deve ter percebido que vamos trabalhar com um plugin do wordpress chamado Yoast!. Para já ir se ambientando com o que vamos trabalhar, acesse o site oficial do projeto: yoast.com. Além de ser uma fonte rica de conteúdo sobre SEO, o Yoast! é o principal plugin do wordpress nesse tema e com certeza você vai se deparar com ele em outros projetos.

# 2. SEO com o wordpress puro

## 2.1 Configurações iniciais do wordpress

Então você acabou de começar essa nova vida de blogueiro criando um partindo do zero, como este site que estamos configurando agora, o Desbrava Mundo.
Nesta aula, passaremos pelas configurações iniciais necessárias, começando pelo "Dashboard" no Wordpress, indo ao "Settings" (ou "Configurações"). O que faremos, basicamente, é passar em cada opção das configurações, ajustando as que são relativas a SEO e discutindo o que elas nos oferecem.

Dentro destas configurações, há opções sobre qual fuso horário ("time zone") a ser utilizado, endereço do site, tagline (o subtítulo). Há ainda uma configuração bem importante. Não sei se você reparou, mas o site está todo em inglês:

Site configurado em inglês

Ou seja, a primeira alteração a ser feita é a linguagem, para português (do Brasil, pois o outro é de Portugal).

Alterando a linguagem de inglês para português

Após salvarmos isto, atualizaremos a página para verificar se essas alterações foram feitas. Agora temos a data em português, assim como os tópicos que aparecem do lado direito do layout, como "Categorias", "Meta", e outros.

Se durante a instalação do Wordpress a linguagem já foi alterada para o português, você pode pular este passo. Passaremos às "Configurações de Escrita", em que não se encontra nada relacionado a SEO, com exceção de um detalhe, a "Categoria padrão de post", que está com "Uncategorized", em inglês.

Você pode renomear esta categoria. Para isto, vá em "Posts > Categorias", depois em "Edição rápida", trocando "Uncategorized" por "Sem categoria". O slug é aquele complemento que segue uma determinada url, caracterizando-a:

Sem categoria

Na parte de "Configurações de Leitura", é imprescindível configurar a seção "Visibilidade nos mecanismos de busca". Por padrão, dependendo da ferramenta ou provedor que você estiver utilizando para instalar seu blog, a configuração virá marcada para evitar que mecanismos de busca indexem seu site. Isto acontece porque você pode há a possibilidade de que seu blog esteja sendo criado, e você ainda não querer disponibilizá-lo.

No caso do site que estamos construindo agora, não faz sentido o Google indexá-lo. É melhor evitarmos isto. Porém, como já apagaremos o primeiro post ("Hello world!"), vamos liberar o site aos indexadores. No entanto, vale lembrar que, se você estiver fazendo isto de casa ou do trabalho, é recomendável desativar esta marcação apenas quando tiver certeza de que os mecanismos de busca (Google, DuckDuckGo, Bing) podem acessá-lo. Isso não é uma regra e não é porque está marcado ali que o site deve ser evitado que, de fato, evitaremos o acesso. Trata-se apenas de uma "dica" dada pelo site aos indexadores. No curso básico sobre SEO, falamos sobre as tags "no index", para que o site não seja indicado aos buscadores - que podem ou não obedecer.

Permitindo a busca do site por indexadores

## 2.2 Habilite seu site para indexação

Na maioria das instalações do wordpress a opção que bloqueia a indexação do seu site pelos buscadores virá configurada por padrão. Isso acontece, pois no primeiro momento o que geralmente é feito são testes, ajustes de layout, criação de páginas e assim por diante, ou seja, o site pode ainda não estar pronto para ser indexado e receber acessos reais.
Assim que você julgar que seu site está pronto para receber esses acessos, você DEVE habilitá-lo para ser indexado. Quando você fizer isso, depois de algumas horas ou poucos dias, seu site já começará a aparecer nos resultados dos principais buscadores.

Opinião do Instrutor

O que acontece por trás dos panos é que o wordpress coloca por padrão a tag noindex nas páginas do seu site, dando assim uma dica para os buscadores de que essas páginas não devem ser indexadas. Ao desabilitar a opção, ele simplesmente remove essa tag.

## 2.3 Configurando os links permanentes

Agora que já fizemos algumas configurações iniciais, apresentaremos outra para darmos uma atenção especial, que é a "Configuração de links permanentes".
Quando seu blog é criado dentro do Wordpress, seu post redireciona a uma url. Como você deve ter visto no curso de SEO, a url tem um peso muito grande na indexação pelo Google. Quanto mais limpa for a url utilizada, com o máximo de palavras-chave para identificá-la, melhor.

O link permanente, portanto, nada mais é do que a url, podendo ser repassada ou "relinkada" por outros sites e blogs. O nome "permanente" já nos traz a ideia de que nenhuma mudança será feita, pois nesse caso o link seria quebrado, deixando de existir, depois, caindo em uma página de erro, por exemplo.

Para acertar a configuração do site e deixar o link permanente o mais limpo possível e facilitando sua indexação, verificaremos o "Dashboard" de configurações do Wordpress. Por padrão, a primeira opção costuma estar selecionada, tendo como parâmetro o id do post:

Padrão de configuração de links permanentes

No entanto, é melhor evitar esse tipo de link, buscando aquilo que for o mais descritivo possível. A outra opção que o Wordpress fornece é utilizar data completa e nome do post, uma opção melhor do que a primeira, porém ainda "poluída". A próxima sugere "mês" e "nome", a outra envolve categoria e id...

A opção de que mais gosto é "Nome do post", porque ser a mais limpa de todas, utilizando o slug na url - o título do post. Isso ajuda os indexadores a identificarem melhor o post, a partir de palavras-chave. Deixaremos esta opção marcada e iremos à parte de "Posts > Todos os posts", para fazermos um teste.

Temos um post salvo como rascunho, vamos publicá-lo, deletando a postagem "Hello World". Qual deveria ser o link permanente desta página, agora? Clicando no título do post, vericaremos que o link permanente é simplesmente o título utilizado no post, separado por hífens no lugar dos espaços, com todas as letras em minúsculo, sem acentos.

Slug e links permanentes

Assim, se alguém digitar no Google algo como "lugares comer bem barcelona", ele vai perceber que o post do site tem a ver. Ou seja, reforçamos as palavras-chave da página para que ela seja facilmente encontrada, obtendo um "rankeamento" melhor.

## 2.4 SEO para imagens no WordPress


