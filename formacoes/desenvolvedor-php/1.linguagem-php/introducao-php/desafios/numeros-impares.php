<?php

for ($i = 1; $i <= 100 ; $i++) :
  $divisao = $i % 2; // pegando o resto da divisão, se for 0 é par, se for diferente de 0 é ímpar

  if ($divisao != 0) :
    echo "#$i" . PHP_EOL;
  endif;
endfor;
