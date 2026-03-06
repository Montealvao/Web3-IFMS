<?php

require_once "Src/DB/Conexao.php";
require_once "Src/Models/Espaco.php";
require_once "Src/Repositories/EspacoRepositorio.php";

$dadosEspaco = new EspacoRepositorio(pdo: $pdo);

$espacos = $dadosEspaco->getTodosEspacos();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Listagem de Espaços</title>
</head>

<body>
    <main>
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Capacidade</td>
                        <td>Descrição</td>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($espacos as $espaco): ?>
                        <tr>
                            <td data-label='ID:'><?= $espaco->getId() ?></td>
                            <td data-label='Nome:'><?= $espaco->getNome() ?></td>
                            <td data-label='Capacidade:'><?= $espaco->getCapacidade() ?></td>
                            <td data-label='Descrição:'><?= $espaco->getDescricao() ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>