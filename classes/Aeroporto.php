<?php

class Aeroporto {

    private string $nome; 
    private string $codigo; 
    private string $unidadeFederativa; 

    public function getNome(): string {
        return $this->nome;
    }

    public function getCodigo(): string {
        return $this->codigo;
    }

    public function getUnidadeFederativa(): string {
        return $this->unidadeFederativa;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setCodigo(string $codigo): void {
        $this->codigo = $codigo;
    }
    public function setUnidadeFederativa(string $unidadeFederativa): void {
        $this->unidadeFederativa = $unidadeFederativa;
    }
}

$aeroporto1 = new Aeroporto();

$aeroporto1->setNome('Maringá');
$aeroporto1->setCodigo('MGF');
$aeroporto1->setUnidadeFederativa('PR');

$aeroporto2 = new Aeroporto();

$aeroporto2->setNome('Cuiabá');
$aeroporto2->setCodigo('CGB');
$aeroporto2->setUnidadeFederativa('MT');

// echo $aeroporto1->getNome();
// echo $aeroporto2->getNome();

?>