<?php 

namespace Builder;

class FabricaFoguetesDirector
{
    protected $construtorDeFoguete;

    /**
     * Class constructor.
     */
    public function __construct(FogueteBuilder $construtorDeFoguete)
    {
        $this->construtorDeFoguete = $construtorDeFoguete;
    }

    public function getFoguete() : FogueteProduct
    {
        return $this->construtorDeFoguete->getFoguete();
    }

    public function construirFoguete()
    {
        $this->construtorDeFoguete->buildModelo();
        $this->construtorDeFoguete->buildMotores();
        $this->construtorDeFoguete->buildTanqueCombustivel();
        $this->construtorDeFoguete->buildNumeroLugares();
    }
}
?>