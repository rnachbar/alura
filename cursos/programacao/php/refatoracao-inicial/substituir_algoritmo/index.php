<?php declare(strict_types=1);

$aulasDisponiveis = [
    'JavaScript Avançado',
    'Iniciando com Laravel',
    'Técnicas de Git',
    'Java Web',
    'Curso de Java'
];

function buscaAulas(string $pesquisa, array $aulasDisponiveis): array {
    $encontradas = [];

    foreach ($aulasDisponiveis as $aula) {
        if (preg_match("/{$pesquisa}/i", $aula) !== 0) {
            array_push($encontradas, $aula);
        }
    }

    return $encontradas;
}

var_dump(buscaAulas('java', $aulasDisponiveis));
