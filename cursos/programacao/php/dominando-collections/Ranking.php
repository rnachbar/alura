<?php

class Ranking extends SplHead {

    public function compare(Musica $musica1, Musica $musica2) {
        if ($musica1->getVezesTocada() === $musica2->getVezesTocada()) :
            return 0;
        endif;

        if ($musica1->getVezesTocada() < $musica2->getVezesTocada()) :
            return -1;
        else :
            return 1;
        endif;
    }

}
