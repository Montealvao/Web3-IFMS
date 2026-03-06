<?php

class EspacoRepositorio
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTodosEspacos(): array
    {
        $sql = "SELECT * FROM espacos";
        $statment = $this->pdo->query(query: $sql);
        $espacos = $statment->fetchAll(mode: PDO::FETCH_ASSOC);

        $dadosEspaco = array_map(callback: function ($espaco): object {
            return $this->formarObjeto(dados: $espaco);
        }, array: $espacos);

        return $dadosEspaco;
    }

    private function formarObjeto($dados): object
    {
        return new Espaco(
            id: $dados['id'],
            nome: $dados['nome'],
            capacidade: $dados['capacidade'],
            descricao: $dados['descricao']
        );
    }

    public function salvar(Espaco $espaco): void
    {
        $sql = "INSERT INTO espacos(nome, capacidade, descricao) VALUES(?,?,?)";
        $statment = $this->pdo->prepare(query: $sql);
        $statment->bindValue(param: 1, value: $espaco->getNome());
        $statment->bindValue(param: 2, value: $espaco->getCapacidade());
        $statment->bindValue(param: 3, value: $espaco->getDescricao());
        $statment->execute();
    }
}
