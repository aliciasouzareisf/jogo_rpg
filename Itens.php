<?php

/* Classe Abstracta Itens*/

namespace app\Http\classes\RPG;

abstract class Itens {
    protected string $nome;
    protected float $peso;

    public function __construct(string $nome, float $peso) {
        $this->nome = $nome;
        $this->peso = $peso;
    }

    abstract public function usar();

    public function getNome(): string {
        return $this->nome;
    }
}
