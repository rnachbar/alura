<?php declare(strict_types=1);

$aulasDisponiveis = [
    'JavaScript Avançado',
    'Iniciando com Laravel',
    'Técnicas de Git',
    'Java Web'
];

function buscaAulas(string $pesquisa, array $aulasDisponiveis): array
{

    $encontradas = [];

    foreach ($aulasDisponiveis as $aula) {
        if (preg_match("/{$pesquisa}/", $aula) !== 0) {
            array_push($encontradas, $aula);
        }
    }

    foreach ($aulasDisponiveis as $aula) {
        $pesquisaCapitalizada = ucwords($pesquisa);
        if (preg_match("/$pesquisaCapitalizada/", $aula) !== 0) {
            array_push($encontradas, $aula);
        }
    }

    foreach ($aulasDisponiveis as $aula) {
        $pesquisaEmLetraMaiuscula = strtoupper($pesquisa);
        if (preg_match("/$pesquisaEmLetraMaiuscula/", $aula) !== 0) {
            array_push($encontradas, $aula);
        }
    }

    $unicas_encontradas = array_unique($encontradas);

    return $unicas_encontradas;
}

var_dump(buscaAulas('Java', $aulasDisponiveis));
