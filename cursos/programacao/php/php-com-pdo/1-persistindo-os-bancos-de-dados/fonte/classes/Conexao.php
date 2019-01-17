<?php /* Arquivo com Conexão do banco de dados */

require_once 'global.php';

class Conexao {

	/* Declarar propriedades ou métodos de uma classe como estáticos faz deles acessíveis sem a necessidade de instanciar a class */
	public static function pegarConexao() {
		/* Criando conexão com o PDO */
        /* Com o PDO, caso utilizemos outro banco de dados, só temos que alterar essa configuração */
		$conexao = new PDO(DB_DRIVE . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $conexao;
	}

}