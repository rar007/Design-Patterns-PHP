<?php 

namespace Builder;

class FogueteModeloIBuilder extends FogueteBuilder{
    

    public function buildTanqueCombustivel()
    {
        $this->fogete->setTanqueCombustivel(1000);
    }
    
    public function buildModelo()
    {
        $this->fogete->setModelo('Foguete Modelo I');
    }

    public function buildMotores()
    {
        $this->fogete->setNumeroMotores(3);
    }

    public function buildNumeroLugares()
    {
        $this->fogete->setNumeroLugares(8);
    }
}
?>