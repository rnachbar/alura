<?php

echo "Olá mundo";
echo 'Olá mundo';

$idade = 27;
echo 'Minha idade é ' . $idade . ' anos';
echo "Minha idade é $idade anos";

// Utilizando aspas duplas ("") o PHP consegue entender variáveis (interpretar o valor da variável dentro da string) sem a necessidade de concatenar com ponto (.)
// Vimos que há uma diferença entre aspas simples (’) e aspas duplas (”) no PHP. Esta diferença está na forma como ele interpreta os dados presentes no texto. Aspas simples é entendido como string, tudo que está dentro das aspas simples é uma string

echo "Olá mundo \n"; // pulando linha

echo "Olá mundo";
echo "\n"; // O PHP entende que dentro dessa string ele precisar interpretar algo (variável ou caracter especial) como, nesse caso, a quebra de linha
echo "\t"; // TAB
echo "Minha idade é $idade anos";

echo "Olá mundo" . PHP_EOL; // PHP END OF LINE (pula linha)

echo "Minha idade é \"$idade\" anos"; // "Minha idade é "27" anos (exibe variável entre aspas)
