<?php

class EspacoRepositorio
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTodosEspacos()
    {
        $sql = "SELECT * FROM espacos";
        $statment = $this->pdo->query($sql);
        $espacos = $statment->fetchAll(PDO::FETCH_ASSOC);

        $dadosEspaco = array_map(function ($espaco) {
            return $this->formarObjeto($espaco);
        }, $espacos);

        return $dadosEspaco;
    }

    private function formarObjeto($dados): object
    {
        return new Espaco(
            $dados['id'],
            $dados['nome'],
            $dados['capacidade'],
            $dados['descricao']
        );
    }
}
?>