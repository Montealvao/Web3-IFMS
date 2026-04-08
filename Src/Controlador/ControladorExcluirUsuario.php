<?php

namespace Web3\MVC\Controlador;

use Web3\MVC\Repositorio\UsuarioRepositorio;

class ControladorExcluirUsuario implements Controlador 
{
    public function __construct(private UsuarioRepositorio $usuarioRepositorio)
    {
    }

    public function processaRequisicao(): void
    {
        $this->usuarioRepositorio->deletar(id: $_POST['id']);
        header("Location: admin");
    }
}

?>