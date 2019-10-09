<?php

// PHP é dinamicamente tipada, conseguimos saber o tipo da variável pelo seu valor
// Tipos Primitivos

$idade = 21;
echo gettype($idade); // retorna tipo da variável (integer)

// float (número com casas decimais) = double (número decimal com mais precisão)
$salario = 1000.00; // número de ponto flutuante (decimal) é representado com ponto (.) invés de vírgula (,)
echo gettype($salario);

$divisao = 10 / 3;
echo gettype($divisao); // double

$texto = 'Olá Mundo';
echo gettype($texto); // string

// boolean
$verdadeiro = true;
$falso = false;
