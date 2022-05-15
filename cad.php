
<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
$vixo = afficherboutique();
  
if(isset($_SESSION['boutique'])&& !empty($_SESSION['boutique'])){
  $idboutique = $_SESSION['boutique']->idboutique;
  var_dump($_SESSION['boutique']);
}



    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" type="text/css" href="styleo.css">
       <style>
           .card .content .goj .imgBx{
               margin-left: -58px;
               margin-top: -50px;
           }

           ::-webkit-scrollbar{
                width: 10px;
                height: 5px;
                background-color: #ff246f;

            }

            
  .card{

margin-left: -500px;
left: 200px;
}

div .card{
    margin-top: 20px;
    margin-bottom: 50px;
}
       </style>
    </head>
    <body>
    <?php while($reponse=$vixo->fetch(PDO::FETCH_OBJ)){?>

         
<a href="descriptachat.php?emails=<?=$reponse->emailss?>">   
<div class="card">


  <div class="content">

      <div class="goj">
      <div class="imgBx">
      <img src="../IMAGES/<?=$reponse->imageboutique?>">
      </div>
     
      <div class="details">
          
          <div>
              <h3><?=$reponse->nomboutique?></h3>
          </div>

          <div>
          <ion-icon name="call-outline"></ion-icon>
              <span><?=$reponse->contacteboutique?></span>
          </div>
          <div>
          <ion-icon name="home-outline"></ion-icon>
              <span><?=$reponse->addentreprise?></span>
          </div>
          <div>
          <ion-icon name="location-outline"></ion-icon>
              <span><?=number_format($reponse->distance,2)."km"?></span>
          </div>
         
          </div>
    
     
  </div>

  </div>

 
</div> 
<?php
  }
  ?>
</a>
   
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    </body>
    </html>
