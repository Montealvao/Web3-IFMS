<?php

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
}
?>  