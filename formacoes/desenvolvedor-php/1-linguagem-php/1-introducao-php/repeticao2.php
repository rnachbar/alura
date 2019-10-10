<?php

/* Mesma coisa */
// $contador = $contador + 1;
// $contador += 1;
// $contador++;

for ($contador = 1; $contador <= 15 ; $contador++) :
  if ($contador = 13) {
    continue; // continue pula a interação do for, indo para a próxima interação
    // break; // break quebra o loop, sai do loop
  }

  echo "#$contador" . PHP_EOL;
endfor;
