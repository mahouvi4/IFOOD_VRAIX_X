<?php
require_once('LESFONCTIONS/fonctions.php');

$x= supprimerboutique($_GET['idboutique']);

if($x=true){
    echo "SUPPRESSION EFFECTEE AVEC SUCESS";
    header("location:listoboutico.php");
} else
 echo "DESOLE ERREUR DE SUPPRESSION";
 

?>