<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
global $connect;

if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])){
    $idclient= $_SESSION['stockinfoclients']->idclient;
   
    
}


$infoclient = $connect->query("SELECT * FROM CLIENT WHERE idclient=$idclient");
$client = $infoclient->fetch();
$nomcomplet=$client['nomclient'].' '.$client['prenomclient'];
$cpfclient=$client['cpfclient'];
$emails=$client['emails'];
$telefone=$client['telephoneclient'];



// PARTIE COMMANDE
$datecommande=date('Y-m-d');
$affichercommande = affichercommande($idclient,$datecommande);
$total=0;
$commande = $affichercommande->fetch(PDO::FETCH_OBJ);
$voco =$commande->codproduit.' '.$commande->nomproduit.' '.
$commande->prixcommande.' '.$commande->qts.' '.$commande->totalcommande.' '.
$commande->datecommande.' '.$commande->representantentreprise.' '.$total=$total+$commande->prixcommande*$commande->qts;
$adresse= $commande->etats . "   " . $commande->ville . "  " . $commande->quartier . "   " . $commande->rue . " Numero: ".$commande->numeros. " CEP: ".$commande->cep ;


?>








<?php

$total=0;
while ($commande = $affichercommande->fetch(PDO::FETCH_OBJ)) {?>
    <h2><?=$commande->codproduit?></h2>
    <h2><?=$commande->nomproduit?></h2>
    <h2><?=$commande->prixcommande.'€'?></h2>
    <h2><?=$commande->qts?></h2>

    <h2><?=$commande->totalcommande?></h2>
    <h2><?=$commande->datecommande?></h2>
    <h2><?=$commande->representantentreprise?></h2>
                
   <?php
     $total=$total+$commande->prixcommande*$commande->qts;
}

?>



 



