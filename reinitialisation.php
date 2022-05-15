<?php
session_start();
$_GET['p']="";
$emailuser=$_GET['emails'];
require_once('LESFONCTIONS/fonctions.php');
if(isset($_POST['f'])){
    
    $emailusers=$_POST['a'];
    $motdepasseuser=$_POST['d'];
    if(empty($motdepasseuser)){
        echo "<div class='alert-danger'><strong>DESOLE VEILLEZ INFORMER VOTRE MOT DE PASSE<strong></div>";
      }else if(pagereinitialisercompte($motdepasseuser,$emailusers)){ 

        echo "<div class='alert-success'>BRAVO!! MOT DE PASSE MODIFIER AVEC SUCCES</div>";
        header('refresh:3,url=connexionclient.php?p=VEILLEZ VOUS AUTHENTIFIER AVEC LE NOUVEAU MOT DE PASSE');
        
      }else
       echo "<div class='alert-danger'>ECHEC DE MODIFICATION DU MOT DE PASSE</div>";
   }
?>
<!DOCTYPE html>
<html>
<head>
    <title>CREER COMPTE UTILISATEUR</title>
    <meta charset="UTF -8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../CSS/bootstrap.min.js"></script>
    <style>
     /* .vag{
      width:200px;
      Display:block;
      height:150px;

   }*/
   .container{
       width: 400px;
        } 
    
 </style>
    
</head>

<body>
    <div class="alert-danger">
    <?php
     if(!empty($erreur)){
        echo $erreur;
    }
    ?>
    </div>
<form method="POST" class="container">
     EMAIL UTLISATEUR:<input type="email" readonly="true" name="a" class="form-control" value="<?=$emailuser?>" />
     MOT DE PASSE UTLISATEUR:<input type="password" name="d" class="form-control" /><br><br>
     <input type="submit" value="VALIDER" name="f" id="lax">
      <a href="creercompteuser.php"> ouvrir un compte</a>


</form>
</html>