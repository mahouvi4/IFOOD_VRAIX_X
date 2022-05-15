<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
//echo $_GET['emailss'];
$vlox=afficherproduitboutiques($_GET['emails']);
echo $_GET['emails'];

?>

<?php 
 include('menu.php');

 
 //partie pagination
 //$connect= new PDO("mysql:host=localhost; dbname=ifood", "root", "");

 $page = isset($_GET['page'])?$_GET['page']:1;
 $size = isset($_GET['size'])?$_GET['size']:3; //nombre de produit par page
 echo $limiteparpage = ($page-1)*$size; // nombre d'affichage par page
 $compteur = "SELECT COUNT(*) an FROM produit"  ;//creer le compteur
 $execute = connect()->query($compteur); //executeur
 $parcour = $execute->fetch();
 $nbtotalaffichageproduit = $parcour['an'];

// creer la premiere requete
$sql1 ="SELECT * FROM produit LIMIT $size offset $limiteparpage";
$executo1 = connect()->query($sql1); 

 // calcul avec modulo du nombre total produit/boutique sur le nombre total de d'affichage de produit/page
 $reste = $nbtotalaffichageproduit%$size;
 if($reste==0){
    $nombrepage = $nbtotalaffichageproduit/$size; 
 }else{
    $nombrepage = floor($nbtotalaffichageproduit/$size)+1;
 }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="stymax.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        
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


           
        </style>
       
    </head>
    <body>
      <div class="container fluid">
      <?php while($produits=$vlox->fetch(PDO::FETCH_OBJ)){?>

        <ul></ul><ul></ul>

        <img src="../IMAGES/<?=$produits->imageproduit?>" class="vox" >
        
      <div class="row justify-content-center">
            <div class="box">
                <span></span>

                <div class="content">
                <div class="col-md-30">
  
                  <h2><?='%' .$produits->reduction?></h2>
                  <h2><?=$produits->codproduit?></h2>
                  <h2><?=$produits->nomproduit?></h2>
                  <h2><?=$produits->prix.'€'?></h2>
                  <p>salut!! je ne suis pas content de vous pour ce que vous m'aviez fait !!</p>
                  <a href="achatprod.php?idproduit=<?=$produits->idproduit?> && emailsss=<?=$produits->representantentreprise?>">Read more
                  </a>
              </div>
       </div>
          </div>
          </div>
          <?php
    }
       ?>

<?php
         // while($produits=$vlox->fetch(PDO::FETCH_OBJ)){
              if($page>1){
                  $q = ($page-1);
                 echo "<a href='descriptachat.php? page=$q' class='btn btn-danger'>previoux</a>"; 
              }

              for($i=1;$i<$nombrepage;$i++){
                echo "<a href='descriptachat.php?page=$i' class='btn btn-success'>$i</a>" ;

              }
             
              if($i>$page){
                $q1 = ($page+1); 
                echo "<a href='descriptachat.php?page=$q1' class='btn btn-warning'>Next</a>"; 

              //}
            }  
          ?>
          </div>
          
       
    </body>
  
</html>


