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
                            <td><?= $espaco->getId() ?></td>
                            <td><?= $espaco->getNome() ?></td>
                            <td><?= $espaco->getCapacidade() ?></td>
                            <td><?= $espaco->getDescricao() ?></td=>
                            <td><a class="botao-editar" href="./Cadastro/Index.php?id=<?= $espaco->getId() ?>">Editar</a></td>
                            <td>
                                <form action="./Excluir/Index.php" method="post">
                                    <input type="hidden" name="id" value="<?= $espaco->getId() ?>">
                                    <input type="submit" class="botao-excluir" value="Excluir">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>