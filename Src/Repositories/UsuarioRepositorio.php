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
        $sql = "SELECT * from usuarios";
        $statement = $this->pdo->query($sql);
        $usuarios = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosUsuario = array_map(function ($usuario) {
            return $this->formarObjeto($usuario);
        }, $usuarios);

        return $dadosUsuario;
    }

    private function formarObjeto($dados): object
    {
        return new Usuario(
            $dados['id'],
            $dados['nome'],
            $dados['email'],
            $dados['senha'],
            $dados['telefone'],
            $dados['permissao']
        );
    }
}
?>