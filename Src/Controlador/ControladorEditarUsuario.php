<?php

namespace Web3\MVC\Controlador;

use Web3\MVC\Repositorio\UsuarioRepositorio;
use Web3\MVC\Modelo\Usuario;

class ControladorEditarUsuario implements Controlador
{
    public function __construct(private UsuarioRepositorio $usuarioRepositorio) {}

    public function processaRequisicao(): void
    {
        if (isset($_POST['editar'])) {
            $usuario = new Usuario(
                id: $_POST['id'],
                nome: $_POST['nome'],
                email: $_POST['email'],
                senha: $_POST['senha'],
                telefone: $_POST['telefone'],
                permissao: $_POST['permissao']
            );

            $this->usuarioRepositorio->atualizar(usuario: $usuario);
        } else {
            $usuario = $this->usuarioRepositorio->buscar(id: $_POST['id']);
        }

        require_once __DIR__ . "/../../Visao/Admin/Usuarios/Edicao/Index.php";
    }
}
