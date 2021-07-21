<?php 

namespace FactoryMethod\Product;

class TeslaModeloX implements CarroProduct{
    
    public function acelerar()
    {
        echo 'Acelerando Tesla Modelo X\n';
    }

    public function freiar()
    {
        echo 'Freando Tesla Modelo X\n';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Tesla Modelo X\n';
    }
}

?>