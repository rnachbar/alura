<?php /* Controle de Categorias */

require_once 'classes/Conexao.php';

class Categoria { /* Classe para entidades do sistema */

    public $id;
    public $nome;

    /* A diferença entre os métodos QUERY e EXEC do PDO são que o QUERY retorna um objeto PDOStatement no qual podemos buscar resultados enquanto o EXEC é mais puro e apenas executa a query sem trazer os resultados apenas informando se a query foi executada com sucesso ou não. */

    public function listar() { /* Listando Dados */
        $query = "SELECT id, nome FROM categorias"; /* Busca no banco de dados */

        /* Conectando via classe de conexao criada */
        /* Utilizamos :: (Conexao::) pois é um método estático */
        $conexao = Conexao::pegarConexao();

        /* Utilizando método QUERY do PDO */
        /* O método QUERY retorna um objeto chamado PDOStatement */
        /* Esse objeto possui várias informações da nossa execução, inclusive a busca feita */
        $resultado = $conexao->query($query);

        /* Utilizando o médoto FETCHALL para ter os resultados buscados */
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function inserir() { /* Inserindo Dados */
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";

        /* Conectando via classe de conexao criada */
        /* Utilizamos :: (Conexao::) pois é um método estático */
        $conexao = Conexao::pegarConexao();

        /* Utilizando método EXEC do PDO para executar nossa query e inserir os dados no banco */
        $conexao->exec($query);
    }

}