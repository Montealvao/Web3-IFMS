<?php

namespace Web3\MVC\Controlador;
use Web3\MVC\Repositorio\EspacoRepositorio;

class ControladorHome implements Controlador
{
    public function __construct(private EspacoRepositorio $espacoRepositorio)
    {
    }

    /**
     * Vai lidar com GET/POST e retornar o html
     */
    public function processaRequisicao(): void
    {
        $espacos = $this->espacoRepositorio->getTodosEspacos();
        require_once __DIR__.'/../../Visao/Home/Index.php';
    }
}

?>