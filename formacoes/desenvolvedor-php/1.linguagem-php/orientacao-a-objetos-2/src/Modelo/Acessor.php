<?php

trait Acessor 
{
    public function __get(string $nomeAtributo): string
    {
        $metodo = ucfirst($nomeAtributo);
        $metodo = "recupera$metodo";
        
        return $this->$metodo;
    }
}