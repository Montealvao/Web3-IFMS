<?php

require_once "Src/DB/Conexao.php";
require_once "Src/Models/Usuario.php";
require_once "Src/Repositories/UsuarioRepositorio.php";

$dadosUsuario = new UsuarioRepositorio(pdo: $pdo);
$usuarios = $dadosUsuario->getTodosUsuarios();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="controle">
        <h1>Lista de usuarios</h1>
        <table class="lista-controle">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario->getId() ?></td>
                        <td><?= $usuario->getNome() ?></td>
                        <td><?= $usuario->getEmail() ?></td>
                        <td><?= $usuario->getTelefone() ?></td>
                        <td><?= $usuario->getPermissao() ?></td>
                    </tr>
                <?php endforeach  ?>
            </tbody>
        </table>
    </div>
</body>

</html>