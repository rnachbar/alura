<?php

class TocadorDeMusica {

    private $musicas;

    public function __construct() {
        /**
         * SplDoublyLinkedList inicia uma lista ligada.
         * Serve quando precisamos utilizar o elemento anterior e o elemente seguinte em nosso array.
         * SplStack é para fazer uma pilha.
         * SplQueue é para fazer uma fila.
         */
        $this->musicas = new SplDoublyLinkedList();
        $this->historico = new SplStack();
        $this->filaDeDownloads = new SplQueue();
        $this->musicas->rewind();
        $this->ranking = new Ranking();
    }

    /**
     * Recebendo um objeto do tipo SplFixedArray
     * @param SplFixedArray $musicas
     */
    public function adicionarMusicas(SplFixedArray $musicas) {
        /**
         * O método rewind volta o ponteiro de interação para o começo do nosso array.
         * O método valid faz a interação do for acontecer até uma posição for existente.
         * O método next pula para a próxima posição do array, seria nosso incremente.
         * O método current retorna o valor atual da interação.
         * O método push adiciona o valor na nossa classe privada $musicas.
         */
        for ($musicas->rewind(); $musicas->valid(); $musicas->next()) :
            $this->musicas->push($musicas->current());
        endfor;

        /**
         * Ao utilizar collections, devemos sempre retornar o ponteiro para a posição inicial.
         */
        $this->musicas->rewind();
    }

    /**
     * Exibindo a música atual.
     */
    public function tocarMusica() {
        /**
         * O método count quantos objetos existem em nosso array.
         */
        if ($this->musicas->count() === 0) :
            echo 'Erro, nenhuma música no tocador';
        else :
            $this->historico->push($this->musicas->current());
            $this->musicas->current()->tocar();
        endif;
    }

    /**
     * Tocando a últuma música que foi tocada.
     */
    public function tocarUltimaMusicaTocada() {
        echo 'Tocando do histórico: ' . $this->historico->pop() . '<br>';
    }

    /**
     * Adicionando uma música.
     * @param string $musica
     */
    public function adicionarMusica($musica) {
        $this->musicas->push($musica);
    }

    /**
     * Pulando para a próxima música. Pulando para a posição a direita.
     */
    public function avancarMusica() {
        $this->musicas->next();

        if (!$this->musicas->valid()) :
            $this->musicas->rewind();
        endif;
    }

    /**
     * Voltando música.
     */
    public function voltarMusica() {
        $this->musicas->prev();

        /**
         * Validando a posição da música.
         */
        if (!$this->musicas->valid()) :
            $this->musicas->rewind();
        endif;
    }

    /**
     * Exibe todas as músicas.
     */
    public function exibirMusicas() {
        for ($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()) :
            echo 'Música: ' . $this->musicas->current() . '<br>';
        endfor;
    }

    /**
     * Conta todas as músicas.
     */
    public function exibirQuantidadeDeMusicas() {
        echo 'Existem ' . $this->musicas->count() . 'músicas no tocador';
    }

    /**
     * Adicionando música no começo da lista.
     * @param string $musica
     */
    public function adicionarMusicaNoComecoDaPlaylist($musica) {
        $this->musicas->unshift($musica);
    }

    /**
     * Removendo do começo da lista.
     */
    public function removerMusicaNoComecoDaPlaylist() {
        $this->musicas->shift();
    }

    /**
     * Removendo do final da lista.
     */
    public function removerMusicaNoFinalDaPlaylist() {
        $this->musicas->pop();
    }

    /**
     * Fazendo download de músicas.
     */
    public function baixarMusicas() {
        if ($this->musicas->count > 0) :
            for ($musicas->rewind(); $musicas->valid(); $musicas->next()) :
                $this->filaDeDownloads->push($this->musicas->current());
            endfor;
    
            /**
             * Interação em collections.
             */
            for ($this->filaDeDownloads->rewind(); $this->filaDeDownloads->valid(); $this->filaDeDownloads->next()) :
                echo "Baixando: " . $this->filaDeDownloads->current() . '...<br>';
            endfor;
        else :
            echo 'Nenhuma música encontrada para baixar.';
        endif;
    }

    /**
     * Exibindo ranking.
     */
    public function exibeRanking() {
        foreach ($this->musicas as $musica) :
            $this->ranking->insert($musica);
        endforeach;

        foreach ($this->ranking as $musica) :
            echo $musica->getNome() . ' - ' . $musica->getVezesTocada() . '<br>';
        endforeach;
    }

}
