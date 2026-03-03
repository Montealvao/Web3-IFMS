<?php

class Reserva
{
    private int $id;
    private int $id_usuario;
    private int $id_espaco;
    private DateTime $data;

    public function __construct(int $id, int $id_usuario, int $id_espaco, DateTime $data)
    {
        $this->id = $id;
        $this->id_usuario = $id_usuario;
        $this->id_espaco = $id_espaco;
        $this->data = $data;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIdUsuario(): int
    {
        return $this->id_usuario;
    }

    public function getIdEspaco(): int
    {
        return $this->id_espaco;
    }

    public function getData(): DateTime
    {
        return $this->data;
    }
}
?>