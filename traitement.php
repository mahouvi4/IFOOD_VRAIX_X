<?php
session_start();
//session_destroy();
//unset($_SESSION['stockinfoclient']);

$key=$_GET['key'];
$quantite=$_GET['ekpemi'];
$emails=$_GET['emails'];
if($quantite==0){
    unset($_SESSION['stockproduit'][$key]);
}else
  if($quantite<0){
      echo "la quantite ne peut que etre superieur a zero(0)";
      return false;
  }else{
    $_SESSION['stockproduit'][$key]['quantite']=$quantite;
$_SESSION['stockproduit'][$key]['totalcommande']=$_SESSION['stockproduit'][$key]['prixproduit']*$quantite;
      header("location:affichagepanier.php?emails=$emails");
  }
if(isset($_GET['ok'])){
    unset($_SESSION['stockproduit'][$key]);
}
//header('location:panier.php');

/*if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])){
    $idclient=$_SESSION['stockinfoclients']->idclient;
}else{
header('location:connectcli.php');  
} 
return false;

 if(isset($_SESSION['adresse']) && !empty($_SESSION['adresse'])) {
    $idadresse=$_SESSION['adresse']->idadresse;
}*/
 
   
?>