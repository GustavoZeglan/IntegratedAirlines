<?php

require_once "Aeroporto.php";
require_once "Aeronave.php";
require_once "Funcionario.php";

class Voo {

    public Aeroporto $aeroportoOrigem;
    public Aeroporto $aeroportoDestino;
    public Aeronave $aviao;
    public $equipe = array(); 

    public function addFuncionario($funcionario) : void {
        array_push($this->equipe, $funcionario);
    }

}

$voo1 = new Voo();

$voo1->aeroportoOrigem = $aeroporto1;
$voo1->aeroportoDestino = $aeroporto2;
$voo1->aviao = $aviao;

$voo1->addFuncionario($piloto);
$voo1->addFuncionario($copiloto);

echo $voo1->aeroportoOrigem->nome;
echo $voo1->aeroportoDestino->nome;
echo $voo1->aviao->modelo;
echo $voo1->aviao->unidadeMedida->tipo;

foreach ($voo1->equipe as $i) {
    echo "$i->nome: $i->cargo \n";
}

?>