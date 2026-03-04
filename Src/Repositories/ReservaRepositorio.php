<?php

class ReservaRepositorio
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTodasReservas()
    {
        $sql = "SELECT * FROM reservas";
        $statment = $this->pdo->query($sql);
        $espacos = $statment->fetchAll(PDO::FETCH_ASSOC);

        $dadosEspaco = array_map(function ($reserva) {
            return $this->formarObjeto($reserva);
        }, $espacos);

        return $dadosEspaco;
    }

    private function formarObjeto($dados): object
    {
        return new Reserva(
            $dados['id'],
            $dados['id_usuario'],
            $dados['id_espaco'],
            $dados['data']
        );
    }
}
?>