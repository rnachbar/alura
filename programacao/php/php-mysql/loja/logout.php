<?php
require_once ("logica-usuario.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
logout();
$_SESSION["success"] = "Usuário deslogado.";
header("Location: index.php");
die;