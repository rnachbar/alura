<?php

$idade = 27;
echo "Você só pode entrar se tiver mais de 18 anos." . PHP_EOL;

if ($idade >= 18) :
  echo "Você tem $idade anos" . PHP_EOL;
endif;
