<?php

namespace Web3\MVC;
use PDO;

class ConexaoBd
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('pgsql:host=localhost;port=5432;dbname=web3-cc', 'postgres', 'postgres'); 
    }

    public function conexao(): PDO
    {
        return $this->pdo;
    }

}

?>