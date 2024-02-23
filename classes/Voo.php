<?php

require_once "Aeroporto.php";
require_once "Aeronave.php";
require_once "Funcionario.php";

class Voo {

    private Aeroporto $aeroportoOrigem;
    private Aeroporto $aeroportoDestino;
    private Aeronave $aviao;
    private $equipe = array(); 

    public function getAeroportoOrigem(): Aeroporto {
        return $this->aeroportoOrigem;
    }
    public function getAeroportoDestino(): Aeroporto {
        return $this->aeroportoDestino;
    }
    public function getAviao(): Aeronave {
        return $this->aviao;
    }

    public function setAeroportoOrigem(Aeroporto $aeroportoOrigem): void {
        $this->aeroportoOrigem = $aeroportoOrigem;
    }
    public function setAeroportoDestino(Aeroporto $aeroportoDestino): void {
        $this->aeroportoDestino = $aeroportoDestino;
    }
    public function setAviao(Aeronave $aviao): void {
        $this->aviao = $aviao;
    }

    public function addFuncionario(Funcionario $funcionario) : void {
        array_push($this->equipe, $funcionario);
    }

}

$voo1 = new Voo();

$voo1->setAeroportoOrigem($aeroporto1);
$voo1->setAeroportoDestino($aeroporto2);
$voo1->setAviao($aviao);

$voo1->addFuncionario($piloto);
$voo1->addFuncionario($copiloto);

?>