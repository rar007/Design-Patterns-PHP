<?php 

namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{
    public function acelerar()
    {
        echo 'Acelerando Tesla Modelo S\n';
    }

    public function freiar()
    {
        echo 'Freando Tesla Modelo S\n';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Tesla Modelo S\n';
    }
}


?>