<?php

/**
 * PSR-4.
 * Autoload de arquivos.
 * 
 * @link https://www.php-fig.org/psr/psr-4/
 */
spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $nomeCompletoDaClasse);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) :
        require_once $caminhoArquivo;
    endif;
});
