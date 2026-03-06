<?php

require_once "Src/DB/Conexao.php";
require_once "Src/Models/Espaco.php";
require_once "Src/Repositories/EspacoRepositorio.php";

if (isset($_POST["cadastro"])) {
    $espaco = new Espaco(
        id: null,
        nome: $_POST["nome"],
        capacidade: $_POST["capacidade"],
        descricao: $_POST["descricao"]
    );
}

$espacoRepositorio = new EspacoRepositorio(pdo: $pdo);
$espacoRepositorio->salvar(espaco: $espaco);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cadastro de Espaços</title>
</head>

<body>
    <main>
        <div class="cadastroEspaco">
            <form action="Index.php" method="POST">
                <h2>Cadastrar novo espaço:</h2>
                <div class="form-group">
                    <label for="nome">Nome do Espaço:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="capacidade">Capacidade:</label>
                    <input type="int" id="capacidade" name="capacidade" required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao" required>
                </div>
                <div class="">
                    <label for="imagem">Envie uma imagem do espaço</label>
                    <input type="image" name="imagem" id="imagem" placeholder="Envie uma imagem">
                </div>
                <button type="submit" name="cadastro" class="btn">Cadastrar</button>
            </form>

        </div>
    </main>
</body>

</html>