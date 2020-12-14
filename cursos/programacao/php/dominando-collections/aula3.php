<?php 

/**
 * Fila segue o conceito de FIFO (First In, First Out).
 * O primeiro elemento que entrou é o primeiro a sair.
 */

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(4);

$musicas[0] = 'One Dance';
$musicas[1] = 'Closer';
$musicas[2] = 'Rockstar';
$musicas[3] = 'Love Youself';

$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);
$tocador->baixarMusicas();
