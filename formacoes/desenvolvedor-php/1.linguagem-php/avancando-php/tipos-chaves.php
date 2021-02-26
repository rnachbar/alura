<?php

// Arrays Associativos só conseguem trabalhar com chaves de inteiros ou strings

$array = [
  1 => 'a'
];

foreach ($array as $item) {
  echo $item . PHP_EOL;
}
