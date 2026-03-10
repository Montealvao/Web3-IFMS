<?php

require_once "Src/DB/Conexao.php";
require_once "Src/Models/Espaco.php";
require_once "Src/Repositories/EspacoRepositorio.php";

$espacoRepositorio = new espacoRepositorio(pdo: $pdo);

$espacoRepositorio->deletar(id: $_POST['id']);

?>