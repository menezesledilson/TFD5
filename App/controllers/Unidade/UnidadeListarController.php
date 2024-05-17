<?php
require_once (__DIR__ ."/../../models/UnidadeModel.php");

class listarUnidade
{    private $listar;
    public function __construct()
    {
        $this->listar = new unidade();
        $this->listarTodos();
    }

    // Armazena todos os dados na propriedade $rows
    public function listarTodos()
    {
       return $this->listar->listarUnidades();
    }

    public function contarTotalUnidades()
    {
         
        $unidades = $this->listar->listarUnidades();
        return count($unidades);
    }
}

?>