<?php

namespace FactoryMethod\Product;

class DodgeCharger implements CarroProduct{
    public function acelerar()
    {
        echo 'Acelerando Dodge Charger\n';
    }

    public function freiar()
    {
        echo 'Freando Dodge Charger\n';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Dodge Charger\n';
    }
}