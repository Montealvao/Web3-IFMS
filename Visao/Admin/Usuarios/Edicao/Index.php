<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Editar Usuário</title>
</head>

<body>
    <main>
        <div class="editarEspaco">
            <div class="edit">
                <p id="titulo_edicao">Editar usuário:</p>
                <form action="Index.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $usuario ?>">

                    <div class="padding_input">
                        <input type="text" placeholder="nome:" name="nome" id="nome" class="inputs" value="<?= $usuario->getNome() ?>">
                    </div>
                    <div class="padding_input">
                        <input type="email" placeholder="email:" name="email" id="email" class="inputs" value="<?= $usuario->getEmail() ?>">
                    </div>
                    <div class="padding_input">
                        <input type="text" placeholder="senha:" name="senha" id="senha" class="inputs" value="<?= $usuario->getSenha() ?>">
                    </div>
                    <div class="padding_input">
                        <input type="text" placeholder="telefone:" name="telefone" id="telefone" class="inputs" value="<?= $usuario->getTelefone() ?>">
                    </div>
                    <div class="padding_input">
                        <input type="text" placeholder="permissao:" name="permissao" id="permissao" class="inputs" value="<?= $usuario->getPermissao() ?>">
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