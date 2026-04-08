<?php

use Web3\MVC\ConexaoBd;  
use Web3\MVC\Modelo\Espaco;  
use Web3\MVC\Modelo\Reserva;  
use Web3\MVC\Modelo\Usuario;  
use Web3\MVC\Repositorio\EspacoRepositorio;  
use Web3\MVC\Repositorio\ReservaRepositorio;  
use Web3\MVC\Repositorio\UsuarioRepositorio;

$conexaoBd = new ConexaoBd();
$pdo = $conexaoBd->conexao();

$espacoRepositorio = new EspacoRepositorio($pdo);

$rotas = require_once(__DIR__."/../Src/Config/Rotas.php");

$metodo = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER["REQUEST_URI"] ?? "/";

$controladorClass = $rotas["$metodo|$uri"];

$controlador = new $controladorClass($espacoRepositorio);
$controlador->processaRequisicao();

?>