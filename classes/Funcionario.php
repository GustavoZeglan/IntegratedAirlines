<?php

class Funcionario {
  
    private string $nome;
    private string $cargo;
    private string $cpf;

    public function getNome() : string {
        return $this->nome;
    }
    
    public function getCargo(): string {
        return $this->cargo;
    }
    
    public function getCPF(): string {
        return $this->cpf;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }
    
    public function setCargo($cargo): void {
        $this->cargo = $cargo;
    }
    
    public function setCPF($cpf): void {
        $this->cpf = $cpf;
    }
    
    
}

$piloto = new Funcionario();
$copiloto = new Funcionario();

$piloto->setNome('Stuart Pot');
$piloto->setCargo('Piloto');
$piloto->setCPF('999.999.999-99');

$copiloto->setNome('Murdoc Niccols');
$copiloto->setCargo('Copiloto');
$copiloto->setCPF('000.000.000-00');

// echo $piloto->getNome();
// echo $copiloto->getNome();

?>