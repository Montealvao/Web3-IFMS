<?php

namespace Web3\MVC\Controlador;

use Web3\MVC\Repositorio\UsuarioRepositorio;

class ControladorAdmin implements Controlador
{
    public function __construct(private UsuarioRepositorio $usuarioRepositorio)
    {
    }

    public function processaRequisicao(): void
    {
        $usuarios = $this->usuarioRepositorio->getTodosUsuarios();
        require_once __DIR__."/../../Visao/Admin/Usuarios/Index.php";
    }
}

?>