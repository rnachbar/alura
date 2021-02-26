<?php

// Strings com acentuação ocupam mais de um byte, por isso o strlen conta mais caracteres.
$string = 'Teste de Integração com PHP';

// strlen conta o número de bytes em uma string.
echo strlen($string) . PHP_EOL;

// mb_strlen é para contar muti bytes, o que é o caso da nossa string.
echo mb_strlen($string) . PHP_EOL;

echo strtoupper($string) . PHP_EOL;

// Transformando caracteres multi bytes para maiúsculo.
echo mb_strtoupper($string) . PHP_EOL;

// Convertendo de UTF-8 para ISO-8859-1
$convertida = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
echo $convertida . PHP_EOL;

echo mb_convert_case($string, MB_CASE_LOWER_SIMPLE) . PHP_EOL;
echo mb_convert_case($string, MB_CASE_TITLE) . PHP_EOL;
