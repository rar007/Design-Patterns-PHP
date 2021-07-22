<?php 

require_once('../autoloader.php');

$montadoradeFogueteTestI = new Builder\FabricaFoguetesDirector(new Builder\FogueteModeloIBuilder());
$montadoradeFogueteTestII = new Builder\FabricaFoguetesDirector(new Builder\FogueteModeloIIBuilder());


$montadoradeFogueteTestI->construirFoguete();
echo $montadoradeFogueteTestI->getFoguete();


$montadoradeFogueteTestII->construirFoguete();
echo $montadoradeFogueteTestII->getFoguete();
?>