<?php

namespace Web3\MVC\Modelo;

class Usuario
{
    private ?int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $telefone;
    private string $permissao;

    public function __construct(?int $id, string $nome, string $email, string $senha, string $telefone, string $permissao)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->telefone = $telefone;
        $this->permissao = $permissao;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getPermissao(): string
    {
        return $this->permissao;
    }
}
?>