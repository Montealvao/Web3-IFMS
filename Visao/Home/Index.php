<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="H-esquerdo">
            <h2>Início</h2>
            <h2>Explorar</h2>
            <h2>Sobre</h2>
        </div>
        <div class="H-direito">
            <a href="../perfil/perfil.php">
                <img src="/Web3-IFMS/Public/Icons/perfil.svg" alt="Perfil" class="icone-perfil">
            </a>
        </div>
    </header>

    <div class="carrosel">
        <div class="imagens">
            <img src="/Web3-IFMS/Public/Images/carrosel-1.jpg" alt="Restaurante 1">
            <img src="/Web3-IFMS/Public/Images/carrosel-2.jpg" alt="Restaurante 2">
        </div>
        <div class="dots">
            <span class="dot" onclick="ImagemAtual(1)"></span>
            <span class="dot" onclick="ImagemAtual(2)"></span>
        </div>
    </div>

    <div class="controle">
    </div>
    <script src="script.js"></script>
</body>

</html>