<?php

namespace Web3\MVC\Controlador;

use Web3\MVC\Repositorio\UsuarioRepositorio;
use Web3\MVC\Modelo\Usuario;

class ControladorCadastrarUsuario implements Controlador
{
    public function __construct(private UsuarioRepositorio $usuarioRepositorio) {}

    public function processaRequisicao(): void
    {
        if (isset($_POST['cadastro'])) {
            $usuario = new Usuario(
                id: null,
                nome: $_POST['nome'],
                email: $_POST['email'],
                senha: $_POST['senha'],
                telefone: $_POST['telefone'],
                permissao: $_POST['permissao']
            );

            $this->usuarioRepositorio->salvar(usuario: $usuario);

            //header("Location: admin");
        }

        require_once __DIR__ . "/../../Visao/Auth/Cadastro/Index.php";
    }
}
