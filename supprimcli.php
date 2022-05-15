<?php
require_once('LESFONCTIONS/fonctions.php');

$x= supprimerclient($_GET['idclient']);

if($x=true){
echo "SUPPRESSION EFFECTEE AVEC SUCESS";
 header("location:listeclient.php");
} else
 echo "DESOLE ERREUR DE SUPPRESSION";
 

?>