<?php 

require 'Album.php';
require 'Musica.php';

/**
 * Definindo o SET.
 * SplObjectStorage guarda objetos.
 */
$albuns = new SplObjectStorage();

$divide = new Album('Divide');
$albuns->attach($divide);

$scorpion = new Album('Scorpion');
$albuns->attach($scorpion);

// echo "<pre>";
// var_dump($albuns);
// echo "</pre>";

$musicasDivide = new SplFixedArray(2);

$musicasDivide[0] = new Musica('1');
$musicasDivide[1] = new Musica('2');

$musicasScorpion = new SplFixedArray(3);

$musicasScorpion[0] = new Musica('Peak');
$musicasScorpion[1] = new Musica('Summer Games');
$musicasScorpion[2] = new Musica('Jaded');

$albuns[$divide] = $musicasDivide;
$albuns[$scorpion] = $musicasScorpion;

foreach ($albuns as $album) :
    echo 'Album: ' . $album->getNome() . '<br>';

    foreach ($album[$album] as $musica) :
        echo 'Música: ' . $musica->getNome() . '<br>';
    endforeach;
endforeach;
