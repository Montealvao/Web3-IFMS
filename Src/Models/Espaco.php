<?php

class Espaco
{
    private ?int $id;
    private string $nome;
    private int $capacidade;
    private string $descricao;
    private string $imagem;

    public function __construct(?int $id, string $nome, int $capacidade, string $descricao, string $imagem = "")
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->capacidade = $capacidade;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
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

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getImagemDiretorio(): string
    {
        return "Src/Content/Uploads" . $this->imagem;
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }
}
?>