<?php /* Controle de Categorias */

require_once 'classes/Conexao.php';

class Categoria { /* Classe para entidades do sistema */

    public $id;
    public $nome;

    /* O método construtor sempre é executado quando a classe (o objeto) é instanciada. */
    public function __construct($id = false) { /* Padrão de criação de método construtor no PHP */
        if ($id):
            $this->id = $id;
            $this->carregar();
        endif;
    }
    
    /* QUERY é utilizado somente SELECT */
    /* EXEC é utilizado somente para INSERT, UPDATE e DELETE */

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

    public function carregar() { /* Listando Dados */
        $query = "SELECT id, nome FROM categorias WHERE id = '" . $this->id . "'"; /* Busca no banco de dados */

        /* Conectando via classe de conexao criada */
        /* Utilizamos :: (Conexao::) pois é um método estático */
        $conexao = Conexao::pegarConexao();

        /* Utilizando método QUERY do PDO */
        /* O método QUERY retorna um objeto chamado PDOStatement */
        /* Esse objeto possui várias informações da nossa execução, inclusive a busca feita */
        $resultado = $conexao->query($query);

        /* Utilizando o médoto FETCHALL para ter os resultados buscados */
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha):
            $this->nome = $linha['nome'];
        endforeach;        
    }

    public function inserir() { /* Inserindo Dados */
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";

        /* Conectando via classe de conexao criada */
        /* Utilizamos :: (Conexao::) pois é um método estático */
        $conexao = Conexao::pegarConexao();

        /* Utilizando método EXEC do PDO para executar nossa query e inserir os dados no banco */
        $conexao->exec($query);
    }

    public function atualizar() { /* Atualizar dados */
        $query = "UPDATE categorias set nome = '" . $this->nome . "' WHERE id = " . $this->id;

        /* Conectando via classe de conexao criada */
        /* Utilizamos :: (Conexao::) pois é um método estático */
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }

    public function excluir() { /* Excluir dados */
        $query = "DELETE FROM categorias WHERE id = " . $this->id;

        /* Conectando via classe de conexao criada */
        /* Utilizamos :: (Conexao::) pois é um método estático */
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }

}