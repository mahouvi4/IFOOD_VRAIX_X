<?php
session_start();
//unset($_SESSION['stockinfoclients']);
//unset($_SESSION['stockproduit']);
require_once('LESFONCTIONS/fonctions.php');
if(isset($_POST['f'])){
    $emailuser=$_POST['a'];
    $motdepasseuser=$_POST['d'];
$y=pageconnexionuser($emailuser,$motdepasseuser);
if($reponse=$y->fetch(PDO::FETCH_OBJ)){
  //var_dump($reponse->fetchAll());
      if($reponse->statut==0){
        echo "<div class='alert-danger'><strong>DESOLE VOTRE COMPTE E DESACTIVE! ,
        <a href='creercompteclient'>VEILLEZ CONTACTER L'ADMINISTRATEUR </a></strong></div>";
      }else{
        $_SESSION['stockinfoclients']=$reponse;   
        $idclient=$_SESSION['stockinfoclients']->idclient;
          $tempo=10000;
          $_SESSION['limitetempo']=time();
          $_SESSION['stockinfotempo']=$tempo;
          $adresse= afficheradresse($idclient);
          if($flox=$adresse->fetch(PDO::FETCH_OBJ)){
            $_SESSION['adresse']=$flox;
            header('location:menui.php');
           }else{
              header('location:pageadresseclient.php');
          }
      }
    }else{
    echo "<div class='alert-danger'><strong>DESOLE MOT DE PASSE OU EMAIL ERRONE,
    <a href='creercompteclient'>OUVRIR UN COMPTE? </a>OU </strong></div>";
}

  }
 
  /*if (!empty($_POST['a'])) {
      echo "<a href='reinitialisation.php? emails=$emailuser'> mot de passe oublié?</a>";
  }*/
  
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
       width: 425px;
        } 
    
 </style>
    
</head>

<body>
    <div class="alert-success">
    <?php
     if(!empty($erreur)){
        echo $erreur;
    }
    ?>
    </div>
    <div class="alert-success">
      <?php if(isset($_GET['p']) && !empty($_GET['p'])){
         echo $_GET['p'];
       }?>
     </div>
   <form method="POST" class="container">
     
     EMAIL UTLISATEUR:<input type="email" name="a" class="form-control" />
     MOT DE PASSE UTLISATEUR:<input type="password" name="d" class="form-control" /><br><br>
     <input type="submit" value="VALIDER" name="f" id="lax">
      <a href="creercompteuser.php"> ouvrir un compte</a> ou
     </form>
       
</body>
</html>

