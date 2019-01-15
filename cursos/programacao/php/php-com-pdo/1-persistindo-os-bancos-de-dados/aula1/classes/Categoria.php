<?php /* Controle de Categorias */

class Categoria { /* Classe para entidades do sistema */

    public $id;
    public $nome;

    public function listar() {
        $query = "SELECT id, nome FROM categorias"; /* Busca no banco de dados */

        /* Criando conexão com o PDO */
        /* Com o PDO, caso utilizemos outro banco de dados, só temos que alterar essa configuração */
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque_pdo', 'root', '');

        /* Utilizando método QUERY do PDO */
        /* O método QUERY retorna um objeto chamado PDOStatement */
        /* Esse objeto possui várias informações da nossa execução, inclusive a busca feita */
        $resultado = $conexao->query($query);

        /* Utilizando o médoto FETCHALL para ter os resultados buscados */
        $lista = $resultado->fetchAll();

        return $lista;
    }

}