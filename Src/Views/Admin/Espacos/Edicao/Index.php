<?php

require_once "Src/DB/Conexao.php";
require_once "Src/Models/Espaco.php";
require_once "Src/Repositories/EspacoRepositorio.php";

$espacoRepositorio = new EspacoRepositorio(pdo: $pdo);

if (isset($_POST['editar'])) {
    $espaco = new Espaco(
        id: $_POST['id'],
        nome: $_POST['nome'],
        capacidade: $_POST['capacidade'],
        descricao: $_POST['descricao']
    );

    if (isset($_FILES['imagem'])) {
        $espaco->setImagem(imagem: uniqid() . $_FILES['imagem']['name']);
        move_uploaded_file(from: $_FILES['imagem']['temp_name'], to: $espaco->getImagemDiretorio());
    }

    $espacoRepositorio->atualizar(espaco: $espaco);
} else {
    $espaco = $espacoRepositorio->buscar(id: $_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Editar Espaço</title>
</head>

<body>
    <main>
        <div class="editarEspaco">
            <div class="edit">
                <p id="titulo_edicao">Editar espaço:</p>
                <form action="Index.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $espaco ?>">

                    <div class="padding_input">
                        <input type="text" placeholder="nome:" name="nome" id="nome" class="inputs" value="<?= $espaco->getNome() ?>">
                    </div>
                    <div class="padding_input">
                        <input type="number" placeholder="capacidade:" name="capacidade" id="capacidade" class="inputs" value="<?= $espaco->getCapacidade() ?>">
                    </div>
                    <div class="padding_input">
                        <input type="text" placeholder="descrição:" name="descricao" id="descricao" class="inputs" value="<?= $espaco->getDescricao() ?>">
                    </div>
                    <div class="padding_input">
                        <input type="file" placeholder="Envie uma imagem:" name="imagem" id="imagem" class="inputs">
                    </div>
                    <div class="padding_input">
                        <button type="submit" name="editar" id="editar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>