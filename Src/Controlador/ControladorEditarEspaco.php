<?php

namespace Web3\MVC\Controlador;

use Web3\MVC\Repositorio\EspacoRepositorio;
use Web3\MVC\Modelo\Espaco;

class ControladorEditarEspaco implements Controlador
{
    public function __construct(private EspacoRepositorio $espacoRepositorio) {}

    public function processaRequisicao(): void
    {
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

            $this->espacoRepositorio->atualizar(espaco: $espaco);
        } else {
            $espaco = $this->espacoRepositorio->buscar(id: $_POST['id']);
        }

        require_once __DIR__ . "/../../Visao/Admin/Espacos/Edicao/Index.php";
    }
}
