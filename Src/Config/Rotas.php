<?php

return [
    "GET|/" => \Web3\MVC\Controlador\ControladorHome::class,
    "GET|/admin" => \Web3\MVC\Controlador\ControladorAdmin::class,
    "GET|/cadastrar/espaco" => \Web3\MVC\Controlador\ControladorCadastrarEspaco::class,
    "POST|/cadastrar/espaco" => \Web3\MVC\Controlador\ControladorCadastrarEspaco::class,
    "GET|/editar/espaco" => \Web3\MVC\Controlador\ControladorEditarEspaco::class,
    "POST|/editar/espaco" => \Web3\MVC\Controlador\ControladorEditarEspaco::class,
    "POST|/excluir/espaco" => \Web3\MVC\Controlador\ControladorExcluirEspaco::class,
    "GET|/cadastrar/usuario" => \Web3\MVC\Controlador\ControladorCadastrarUsuario::class,
    "POST|/cadastrar/usuario" => \Web3\MVC\Controlador\ControladorCadastrarUsuario::class,
    "GET|/editar/usuario" => \Web3\MVC\Controlador\ControladorEditarUsuario::class,
    "POST|/editar/usuario" => \Web3\MVC\Controlador\ControladorEditarUsuario::class,
    "POST|/excluir/usuario" => \Web3\MVC\Controlador\ControladorExcluirUsuario::class,
]

?>