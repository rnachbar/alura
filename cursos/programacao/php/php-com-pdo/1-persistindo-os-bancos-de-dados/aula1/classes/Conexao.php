<?php /* Arquivo com Conexão do banco de dados */

class Conexao {

	/* Declarar propriedades ou métodos de uma classe como estáticos faz deles acessíveis sem a necessidade de instanciar a class */
	public static function pegarConexao() {
		/* Criando conexão com o PDO */
        /* Com o PDO, caso utilizemos outro banco de dados, só temos que alterar essa configuração */
		$conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque_pdo', 'root', '');
		
		return $conexao;
	}

}