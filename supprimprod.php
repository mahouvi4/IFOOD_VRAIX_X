<?php
require_once('LESFONCTIONS/fonctions.php');

$x= supprimerproduit($_GET['idproduit']);

if($x=true){
    echo "SUPPRESSION EFFECTEE AVEC SUCESS";
    header("location:listoprod.php");
} else
 echo "DESOLE ERREUR DE SUPPRESSION";
 

?>