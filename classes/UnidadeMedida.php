<?php

class UnidadeMedida {
    private int $medidaId; 
    private string $tipo; 

    public function getTipo() : string {
        return $this->tipo;
    }

    public function setMedidaId(int $medidaId): void {
        $this->medidaId = $medidaId;
    }

    public function setTipo(string $tipo) : void {
        $this->tipo = $tipo;
    }


}

$kg = new UnidadeMedida();
$kg->setMedidaId(1);
$kg->setTipo("Kg");

?>