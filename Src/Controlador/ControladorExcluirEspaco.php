<?php

namespace Web3\MVC\Controlador;

use Web3\MVC\Repositorio\EspacoRepositorio;

class ControladorExcluirEspaco implements Controlador 
{
    public function __construct(private EspacoRepositorio $espacoRepositorio)
    {
    }

    public function processaRequisicao(): void
    {
        $this->espacoRepositorio->deletar(id: $_POST['id']);
        header("Location: admin");
    }
}

?>