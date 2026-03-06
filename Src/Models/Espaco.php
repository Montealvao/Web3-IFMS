<?php

class Espaco
{
    private ?int $id;
    private string $nome;
    private int $capacidade;
    private string $descricao;

    public function __construct(?int $id, string $nome, int $capacidade, string $descricao)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->capacidade = $capacidade;
        $this->descricao = $descricao;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}
?>