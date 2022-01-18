<?php 

/**
 * Este 4º princípio está diretamente ligado ao 3º (herança), pois através da herança conseguimos alcançar o polimorfismo.
 * Polimorfismo é a capacidade de um objeto poder ser referenciado de várias formas 
 * (cuidado, polimorfismo não quer dizer que o objeto fica se transformando, muito pelo contrário, 
 * um objeto nasce de um tipo e morre daquele tipo, o que pode mudar é a maneira como nos referimos a ele).
 */

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, EditorVideo, Gerente, Diretor};
use Alura\Banco\Modelo\CPF;

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Raphael Nachbar',
    '405.945.288-28',
    1000
);

$umFuncionario->sobeDeNivel();

$umEditor = new EditorVideo(
    'Raphael Nachbar',
    '405.945.288-28',
    800
);

$umGerente = new Gerente(
    'Jessica Esteves',
    '123.456.789-10',
    3000
);

$umDiretor = new Diretor(
    'Aldo Esteves Nachbar',
    '111.111.111-11',
    6000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umGerente);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
