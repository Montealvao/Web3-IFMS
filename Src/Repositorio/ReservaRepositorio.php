<?php

namespace Web3\MVC\Repositorio;
use PDO;
use Web3\MVC\Modelo\Reserva;

class ReservaRepositorio
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTodasReservas(): array
    {
        $sql = "SELECT * FROM reservas";
        $statment = $this->pdo->query(query: $sql);
        $espacos = $statment->fetchAll(mode: PDO::FETCH_ASSOC);

        $dadosEspaco = array_map(callback: function ($reserva): object {
            return $this->formarObjeto(dados: $reserva);
        }, array: $espacos);

        return $dadosEspaco;
    }

    private function formarObjeto($dados): object
    {
        return new Reserva(
            id: $dados['id'],
            id_usuario: $dados['id_usuario'],
            id_espaco: $dados['id_espaco'],
            data: $dados['data']
        );
    }
}
?>