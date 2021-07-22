<?php 

namespace Builder;

abstract class FogueteBuilder{
    protected $fogete;
    public function __construct()
    {
        $this->fogete = new FogueteProduct();
    }

    public function getFoguete() : FogueteProduct
    {
        return $this->fogete;
    }

    abstract public function buildTanqueCombustivel();
    abstract public function buildModelo();
    abstract public function buildMotores();
    abstract public function buildNumeroLugares();


}

?>