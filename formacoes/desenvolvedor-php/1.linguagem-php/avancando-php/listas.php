<?php

$idadeList = [21, 23, 25, 19, 30, 27];
$idadeList[] = 20;

// Lista os valores pela ordem do array.
// list($idade1, , $idade3) = $idadeList;
list($idade1, $idade2, $idade3) = $idadeList;
unset($idadeList[4]);

foreach ($idadeList as $idade) :
    echo $idade . PHP_EOL;
endforeach;
