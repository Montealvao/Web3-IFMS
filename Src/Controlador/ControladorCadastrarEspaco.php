<?php

namespace Web3\MVC\Controlador;

use Web3\MVC\Repositorio\EspacoRepositorio;
use Web3\MVC\Modelo\Espaco;

class ControladorCadastrarEspaco implements Controlador
{
    public function __construct(private EspacoRepositorio $espacoRepositorio) {}

    public function processaRequisicao(): void
    {
        if (isset($_POST['cadastro'])) {
            $espaco = new Espaco(
                id: null,
                nome: $_POST['nome'],
                capacidade: $_POST['capacidade'],
                descricao: $_POST['descricao']
            );

            if (isset($_FILES['imagem'])) {
                $espaco->setImagem(imagem: uniqid() . $_FILES['imagem']['name']);
                move_uploaded_file(from: $_FILES['imagem']['temp_name'], to: $espaco->getImagemDiretorio());
            }

            $this->espacoRepositorio->salvar($espaco);

            header("Location: admin");
        }

        require_once __DIR__ . "/../../Visao/Admin/Espacos/Cadastro/Index.php";
    }
}
