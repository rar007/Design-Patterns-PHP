<?php

namespace Builder;

class FogueteProduct{
    protected $tanqueCombustivel;
    protected $modelo;
    protected $numeroMotores;
    protected $numeroLugares;
    

    public function __toString() : string
    {
        $result = "Foguete model: {$this->getModelo()} \n";
        $result .= "Litros do tanque: {$this->getTanqueCombustivel()} \n";
        $result .= "Numero de motores: {$this->getNumeroMotores()} \n";
        $result .= "Numero de Lugares: {$this->getNumeroLugares()} \n";

        return $result;
    }

    public function getTanqueCombustivel() : float
    {
        return $this->tanqueCombustivel;
    }

    public function setTanqueCombustivel(float $litroCombustivel) : FogueteProduct 
    {
        $this->tanqueCombustivel = $litroCombustivel;

        return $this;
    }

    public function getModelo() : string
    {
        return $this->modelo;
    }
    public function setModelo(string $modelo) : FogueteProduct
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getNumeroMotores() : int
    {
        return $this->numeroMotores;
    }
    public function setNumeroMotores(int $numeroMotores) : FogueteProduct
    {
        $this->numeroMotores = $numeroMotores;

        return $this;
    }

    public function getNumeroLugares() : int
    {
        return $this->numeroLugares;
    }
    public function setNumeroLugares(int $numeroLugares) : FogueteProduct
    {
        $this->numeroLugares = $numeroLugares;

        return $this;
    }
}