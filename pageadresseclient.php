<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
if(isset($_POST['boto'])){
  $etats=$_POST['etat'];
  $villes=$_POST['ville'];
  $quartiers=$_POST['quartier'];
   $rues=$_POST['rue'];
   $numeros=$_POST['numeros'];
   $cep=$_POST['cep'];
   if(isset($_SESSION['stockinfoclients']) &&!empty($_SESSION['stockinfoclients'])){
       $idclients=$_SESSION['stockinfoclients']->idclient;
       var_dump($_SESSION['stockinfoclient']);

      // addadress($etats,$villes,$quartiers,$rues,$cep,$numeros,$idclients);
   } 
   $connect= new PDO("mysql:host=localhost;dbname=ifood","root","");
   $sql="INSERT INTO ADRESSE(etats,ville,quartier,rue,numeros,cep,idclient) VALUES(?,?,?,?,?,?,?)";
   $varaddadress=$connect->prepare($sql);
   $varaddadress->execute(array($etats,$villes,$quartiers,$rues,$numeros,$cep,$idclients));
      //addadress($etats,$villes,$quartiers,$rues,$cep,$numeros,$idclients);
      $adresse= afficheradresse($idclients);
      if($flox=$adresse->fetch(PDO::FETCH_OBJ)){
            $_SESSION['adresse']=$flox;
            header('location:menui.php');
           }
      
}

?>


<!DOCTYPE html>
<html>
<head>
 <title>PAGE INFO ADRESSE DU CLIENT</title>
   <meta charset="UTF -8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style>
    .container{
      width:400px;

    }

   </style>
</head>
   <body>
     <form method="POST" class="container">
     <div class="form-group">
     <label>ETAT</label><input type="text" class="form-control" name="etat"/> 
     </div>
     <div class="form-group">
     <label>VILLE</label><input type="text" class="form-control" name="ville"/> 
     </div>
     <div class="form-group">
     <label>QUARTIER</label><input type="text" class="form-control" name="quartier"/> 
     </div>
     <div class="form-group">
     <label>RUE</label><input type="text" class="form-control" name="rue"/> 
     </div>
     <div class="form-group">
     <label>NUMERO</label><input type="number" class="form-control" name="numeros"/> 
     </div>
     <div class="form-group">
     <label>CEP</label><input type="text" class="form-control" name="cep"/> 
     </div>
     <div class="form-group">
     <input type="submit" value="ENTER" class="btn btn-primary" name="boto"/> 
     </div>

     </form>

  </body>
  

</html>
