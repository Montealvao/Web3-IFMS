<?php

namespace Web3\MVC\Repositorio;
use PDO;
use Web3\MVC\Modelo\Usuario;

class UsuarioRepositorio
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTodosUsuarios(): array
    {
        $sql = "SELECT * FROM usuarios";
        $statement = $this->pdo->query(query: $sql);
        $usuarios = $statement->fetchAll(mode: PDO::FETCH_ASSOC);

        $dadosUsuario = array_map(callback: function ($usuario): object {
            return $this->formarObjeto(dados: $usuario);
        }, array: $usuarios);

        return $dadosUsuario;
    }

    private function formarObjeto($dados): object
    {
        return new Usuario(
            id: $dados['id'],
            nome: $dados['nome'],
            email: $dados['email'],
            senha: $dados['senha'],
            telefone: $dados['telefone'],
            permissao: $dados['permissao']
        );
    }

    public function salvar(Usuario $usuario): void
    {
        $sql = "INSERT INTO usuarios(nome, email, senha, telefone, permissao) VALUES(?,?,?,?,?)";
        $statement = $this->pdo->prepare(query: $sql);
        $statement->bindValue(param: 1, value: $usuario->getNome());
        $statement->bindValue(param: 2, value: $usuario->getEmail());
        $statement->bindValue(param: 3, value: $usuario->getSenha());
        $statement->bindValue(param: 4, value: $usuario->getTelefone());
        $statement->bindValue(param: 5, value: $usuario->getPermissao());
        $statement->execute();
    }

    public function buscar(int $id): object
    {
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $statment = $this->pdo->prepare(query: $sql);
        $statment->bindValue(param: 1, value: $id);
        $statment->execute();

        $dados = $statment->fetch(mode: PDO::FETCH_ASSOC);

        return $this->formarObjeto(dados: $dados);
    }

    public function atualizar(Usuario $usuario): void
    {
        $sql = "UPDATE usuarios SET nome = ?, email = ?, senha = ?, telefone = ?, permissao = ? WHERE id = ?";
        $statment = $this->pdo->prepare(query: $sql);
        $statment->bindValue(param: 1, value: $usuario->getNome());
        $statment->bindValue(param: 2, value: $usuario->getEmail());
        $statment->bindValue(param: 3, value: $usuario->getSenha());
        $statment->bindValue(param: 4, value: $usuario->getTelefone());
        $statment->bindValue(param: 5, value: $usuario->getPermissao());
        $statment->bindValue(param: 6, value: $usuario->getId());
        $statment->execute();
    }

    public function deletar(int $id): void
    {
        $sql = "DELETE FROM usuarios WHERE id =  ?";
        $statment = $this->pdo->prepare(query: $sql);
        $statment->bindValue(param: 1, value: $id);
        $statment->execute();
    }
}
