<?php
require_once (__DIR__ ."/../../models/CarroModel.php");

class listarCarro{
    private $listar;
    public function __construct(){
        $this->listar = new Carro();
        $this -> listarTodos();
    }
    //listar todos os dados
    public function listarTodos(){
        return $this -> listar->listarCarros();
    }


}