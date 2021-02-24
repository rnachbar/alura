<?php declare(strict_types=1);

namespace Alura\SubstituirArrayPorObjeto;

use PDO;

$dadosUsuario = ['Giovanni', 'Tempobono', 'Alura', 'Instrutor'];

$pdo = new PDO('sqlite:bancodedados.db');

$inserir_usuario = $pdo->prepare(
    'INSERT INTO usuarios (nome, sobrenome, empresa, cargo) VALUES (?,?,?,?)'
);

$inserir_usuario->bindParam(1, $dadosUsuario[0]);
$inserir_usuario->bindParam(2, $dadosUsuario[1]);
$inserir_usuario->bindParam(3, $dadosUsuario[2]);
$inserir_usuario->bindParam(4, $dadosUsuario[3]);

$inserir_usuario->execute();

$buscar_usuarios = $pdo->prepare('SELECT * FROM usuarios');

if ($buscar_usuarios->execute()) {
    $usuarios = $buscar_usuarios->fetchAll();
    foreach ($usuarios as $usuario) {
        echo '<br>';
        echo "<p>Nome: {$usuario['nome']}</p>";
        echo "<p>Sobrenome: {$usuario['sobrenome']}</p>";
        echo "<p>Empresa: {$usuario['empresa']}</p>";
        echo "<p>Cargo: {$usuario['cargo']}</p>";
        echo '<br>';
    }
}
