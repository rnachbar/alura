<?php

/**
 * A Standard PHP Library (SPL) é a biblioteca padrão do PHP desde a versão 5 com o propósito de incluir soluções para problemas recorrentes no desenvolvimento. Ela contém várias funções, objetos e interfaces para lidar com autoloading, collections, iterators e exceptions
 * A biblioteca SPL é muito utilizada em vários tipos de projetos PHP, inclusive os mais famosos como o Composer, o gerenciador de dependências utilizado na maioria dos frameworks PHP modernos. Ele faz uso extensivo da biblioteca SPL para a sua função de autoloading, por exemplo.
 * Neste curso de collections, vamos utilizar as collections presentes na biblioteca SPL, que nos permitem resolver problemas reais de uma maneira mais simplificada, e aprendê-las é um passo importante para dominar o PHP como um todo.
 * Não serão abordados neste curso as collections da extensão PHP-DS, ela é uma biblioteca muito recente e ainda possui muitos pontos que devem ser corrigidos pelos desenvolvedores para um dia ser incluída por padrão na linguagem. É algo que vale a pena olhar em um futuro próximo, mas fique tranquilo que todos os conceitos de collections são facilmente transferíveis de uma biblioteca para a outra!
 */

 require 'TocadorDeMusica.php';

/**
 * Usando collection com o SplFixedArray que está preparada para trabalhar com grupos de objetos.
 * O argumento passado (2) é o tamanho do Array.
 */
$musicas = new SplFixedArray(2);

$musicas[0] = 'One Dance';
$musicas[1] = 'Closer';

/**
 * Como definimos o tamanho fixo de duas posições em nosso SplFixedArray, utilizamos o setSize para 
 * definir o novo tamanho do nosso array.
 * Agora nossa array $musicas pode armazenar 4 objetos.
 */

$musicas->setSize(4);

$musicas[2] = 'Rockstar';
$musicas[3] = 'Love Youself';

/**
 * O método getSize informa o tamanho definido do nosso array.
 * Não informa quantos objetos tem nesse array, mas sim o tamanho máximo dele.
 */
// echo $musicas->getSize();

/**
 * Iniciando a classe TocadorDeMusica.
 */
$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);
$tocador->tocarMusica();

/**
 * Adicionando uma única música.
 */
// $tocador->adicionarMusica('Havana');

/**
 * Avançando uma música e tocando ela.
 */
// $tocador->avancarMusica();
// $tocador->tocarMusica();

// $tocador->exibirMusicas();
// $tocador->exibirQuantidadeDeMusicas();

$tocador->adicionarMusicaNoComecoDaPlaylist('Havana');
$tocador->removerMusicaNoComecoDaPlaylist();
$tocador->removerMusicaNoFinalDaPlaylist();
