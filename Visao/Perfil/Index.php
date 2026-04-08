<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="H-esquerdo">
            <h2 style="cursor: pointer;"><a href="../Home/Index.php" style="text-decoration: none;">Início</a></h2>
            <h2> <a style="text-decoration: none;" href="../Admin/Usuarios/Index.php">Admin</a> </h2>
        </div>
    </header>

    <div class="container">
        <div class="perfil-imagem">
            <img src="/Web3-IFMS/Public/Icons/perfil.svg" style="cursor: pointer;" alt="Perfil">
        </div>

        <form>
            <div class="botoes-editar">
                <input type="hidden" name="id">
                <div>
                    <label style="display: block;">Nome:</label>
                    <input type="text" name="nome" class="btn">
                </div>
                <div>
                    <label style="display: block;">Email:</label>
                    <input type="email" name="email" class="btn">
                </div>
                <div>
                    <label style="display: block;">Senha:</label>
                    <input type="password" name="senha" class="btn">
                </div>
                <div>
                    <label style="display: block;">Telefone:</label>
                    <input type="tel" name="telefone" class="btn">
                </div>
                <button type="submit" class="btn">Confirmar mudanças</button>
            </div>
        </form>
    </div>
</body>

</html>