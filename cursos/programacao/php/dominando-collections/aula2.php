<?php 

/**
 * Pilha segue o conceito de LIFO (Last In, First Out).
 * O último elemento que entrou é o primeiro a sair, isso que o metódo POP faz com nossa pilha (SplStack).
 */

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(4);

$musicas[0] = 'One Dance';
$musicas[1] = 'Closer';
$musicas[2] = 'Rockstar';
$musicas[3] = 'Love Youself';

$tocador = new TocadorDeMusica();
$tocador->adicionarMusicas($musicas);

$tocador->tocarMusica();
$tocador->avancarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();
$tocador->avancarMusica();

$tocador->tocarUltimaMusicaTocada();
