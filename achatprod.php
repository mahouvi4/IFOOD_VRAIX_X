<?php
session_start();
ob_start();
require_once('LESFONCTIONS/fonctions.php');
$vlox=afficherachatproduit($_GET['idproduit']);
$emails=$_GET['emailsss'];
$reponse=$vlox->fetch(PDO::FETCH_OBJ);
$idproduit=$reponse->idproduit;
$reduction=$reponse->reduction;
$codproduit=$reponse->codproduit;
$nomproduit=$reponse->nomproduit;
$desproduit=$reponse->desproduit;
$prixproduit=$reponse->prix;
$imageproduit=$reponse->imageproduit;
$representantentreprise=$reponse->representantentreprise;

if (isset($_POST['ent'])) {
    if (isset($_SESSION['stockproduit'])){
        $idproduit=array_column($_SESSION['stockproduit'], "idproduit");
        if (!in_array($_GET['idproduit'], $idproduit)) {
            $tablpanier= array(
                'idproduit' => $_POST['idproduit'],
                'reduction' => $_POST['reduction'],
                'codproduit' => $_POST['codproduit'],
                'nomproduit' => $_POST['nomproduit'],
                'desproduit' => $_POST['desproduit'],
                'prixproduit' => $_POST['prix'],
                'quantite' => $_POST['quantite'],
                'totalcommande'=>$_POST['quantite']*$_POST['prix'],
                'imageproduit' => $_POST['imageproduit'],
                'representantentreprise' => $_POST['representantentreprise'] 
              
               ); //declaration de la variable tableau
            $_SESSION['stockproduit'][]=$tablpanier;
        }
        //sinon il n'ajoute aucun produit
    } else {
        $tablpanier= array(
        'idproduit' => $_POST['idproduit'],
        'reduction' => $_POST['reduction'],
        'codproduit' => $_POST['codproduit'],
        'nomproduit' => $_POST['nomproduit'],
        'desproduit' => $_POST['desproduit'],
        'prixproduit' => $_POST['prix'],
        'quantite' => $_POST['quantite'],
        'totalcommande'=>$_POST['quantite']*$_POST['prix'],
        'imageproduit' => $_POST['imageproduit'] ,
        'representantentreprise' => $_POST['representantentreprise'] 
        ); //declaration de la variable tableau

        $_SESSION['stockproduit'][]=$tablpanier;
    }

     header("location:affichagepanier.php?emails=$emails");

}
ob_end_flush();
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" type="text/css" href="stino.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">;
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>

        <style>
        .vox{
            width: 150px;
            height:100px;
           margin-top: -500px;
           overflow: hidden;
           border-radius: 50%;
          
        }

        body {
    background: url('ifood11.jpg') center repeat-y;
    background-size: cover;
    height: 100vh;
    overflow-y: auto;
}

::-webkit-scrollbar {
    width: 10px;
    height: 5px;
    background-color: #ff246f;
}

.lob{
    margin-left: 425px;
    margin-top: -450px;
    position: relative;
}

h1{
    margin-left: -120px;
    font-size: 30px;
}

.ciu{
    margin-left: 5px;
    margin-top:-150px;
}
     
.qt{
    height: 40px;
    font-size: 40%;
    margin-left: 25px;
    text-align: center;
}

.ttl{
    height: 40px;
    margin-left: 70px;
    text-align: center;
}

div .jio{
    width: 40%;
}

.nil{
    margin-left: -30%;
    margin-top: 50%;
}

div .nil{
    margin-left: 70px;
}

        </style>
       
    </head>
    <body>
    
    
        <ul></ul><ul></ul>
      <div class="container ">
      <img src="../IMAGES/<?=$imageproduit?>" class="vox" >
       <div class="box">

                <span></span>
                <div class="content">
               <h2><?='%' .$reduction?></h2>
                  <h2><?=$codproduit?></h2>
                  <h2><?=$nomproduit?></h2>
                  <h2><?=$prixproduit.'€'?></h2>
                  <p>salut!! je ne suis pas content de vous pour ce que vous m'aviez fait !!</p>
                  <a href="#" >Read more</a>
              
          </div>
          </div>


             <div class="lob">
             <div class="box">
                <span></span>
                <div class="content">
                  <h2>Description:</h2>
                  <p><?=$desproduit?></p>
                  <a href="#" >Read more</a>
              </div>
          </div>
     </div>

           
               <div class="card jio">
             <div class="content">
             <form method="POST"> 
       <h1><label class="ciu">Prix Unit:</label> <?=$prixproduit.'€'?></h1><br><br>
       <div class="card-body text-center">
      <h1><label class="tipo">Quantite:</label><input type="number" name="quantite" class="qt" id="qt" onclick="total(this.value);" onkeyup="total(this.value);" value="1"></h1><br><br><br>
      <h1><label class="flio">TotaL:</label><input type="number" name="ttl" class="ttl" id="ttl" value="<?=$prixproduit?>" readonly="true"></h1><br><br><br>
 
       <input type="hidden" name="idproduit" value="<?=$_GET['idproduit']?>" />
       <input type="hidden" name="codproduit" value="<?=$codproduit?>" />
       <input type="hidden" name="representantentreprise" value="<?=$representantentreprise?>" />
       <input type="hidden" name="nomproduit" value="<?=$nomproduit?>" />
       <input type="hidden" name="desproduit" value="<?=$desproduit?>" />
       <input type="hidden" name="prix" value="<?=$prixproduit?>" />
       <input type="hidden" name="imageproduit" value="<?=$imageproduit?>" />
       <input type="hidden" name="pprix" id="pprix" value="<?=$prixproduit?>">

       <label>
             <input type="submit" value="Entrer" name="ent" class="ent" id="ent" checked>
             <span></span>
             </label>
       </form>
                  
           </div>
           </div>
     
           <script  type="text/javascript" src="jquery.js"></script>
<script src="../CSS/jquery.elevatezoom.min.js" type="text/javascript"></script>
<script>
    $("#im").elevateZoom();
</script>

<script>

function total(ambroise){
document.getElementById('ttl').value=document.getElementById('pprix').value*ambroise;
}


</script>

 </div>  
     
 </body>
 
 <?php
       include('pieduni.php');
 ?>
        

</html>
