<?php 

namespace Builder;

class FogueteModeloIIBuilder extends FogueteBuilder
{
    public function buildTanqueCombustivel()
    {
        $this->fogete->setTanqueCombustivel(850);
    }
    
    public function buildModelo()
    {
        $this->fogete->setModelo('Foguete Modelo II');
    }

    public function buildMotores()
    {
        $this->fogete->setNumeroMotores(2);
    }

    public function buildNumeroLugares()
    {
        $this->fogete->setNumeroLugares(6);
    }
}
?>