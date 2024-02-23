<?php

require_once 'UnidadeMedida.php';

class Aeronave {

    private string $modelo;
    private string $classificacaoAeronave;
    private int $capacidadeCarga;
    private UnidadeMedida $unidadeMedida;

    public function getModelo(): string {
        return $this->modelo;
    } 

    public function getClassificacaoAeronave(): string {
        return $this->classificacaoAeronave;
    } 

    public function getCapacidadeCarga(): int {
        return $this->capacidadeCarga;
    } 

    public function getUnidadeMedida(): UnidadeMedida {
        return $this->unidadeMedida;
    } 

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    } 

    public function setClassificacaoAeronave(string $classificacaoAeronave): void {
        $this->classificacaoAeronave = $classificacaoAeronave;
    } 

    public function setCapacidadeCarga(int $capacidadeCarga): void {
        $this->capacidadeCarga = $capacidadeCarga;
    } 

    public function setUnidadeMedida(UnidadeMedida $unidadeMedida): void {
        $this->unidadeMedida = $unidadeMedida;
    } 

}

$aviao = new Aeronave();

$aviao->setModelo('Concorde');
$aviao->setClassificacaoAeronave('Comercial');
$aviao->setUnidadeMedida($kg);
$aviao->setCapacidadeCarga(500);

// echo $aviao->getModelo();
// echo $aviao->getClassificacaoAeronave();
// echo $aviao->getCapacidadeCarga();

?>