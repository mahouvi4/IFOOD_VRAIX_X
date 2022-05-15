
<?php
//session_start();
require_once('LESFONCTIONS/fonctions.php');
$vixo = affichusermenu($_GET['idclient']);

$reponse=$vixo->fetch(PDO::FETCH_OBJ);
$idclient = $reponse->idclient;
$profileclient = $reponse->profileclient;
$nomclient = $reponse->nomclient;
$prenomclient = $reponse->prenomclient;
$sexclient = $reponse->sexclient;
$emails = $reponse->emails;

  
//var_dump($_SESSION['stockinfoclients']);
//unset($_SESSION['stockinfoclients']);

//var_dump($vixo->fetchAll());

     
    ?>
 


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" type="text/css" href="fox.css">
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

margin-left: -330px;
margin-top: -250px;
left: 200px;
}

div .card{
    margin-top: 20px;
    margin-bottom: 50px;
    
}

span .lol{
    margin-top:20% ;
}
       </style>
    </head>
    <body>
        
    
      
      <div class="card">

     
          <div class="content">

              <div class="goj">
              <div class="imgBx">
              <img src="../IMAGES/<?=$profileclient?>">
              </div>
             
              <div class="details">
                  
                  <div>
                      <h3><?=$nomclient?></h3>
                  </div>

                  <div>
                  <ion-icon name="call-outline"></ion-icon>
                      <span><?=$prenomclient?></span>
                  </div>
                  <div>
                  <ion-icon name="home-outline"></ion-icon>
                      <span><?=$sexclient?></span>
                  </div>
                  <div>
                  <ion-icon name="home-outline"></ion-icon>
                      <span><?=$emails?></span>
                  </div>
                    
                </div>
            
                <div>
                  <ion-icon name="home-outline"></ion-icon>
                <span class="action_btn"><a href="modifinfocli.php?idclient=<?=$idclient?>">Modifier</a></spam><br><br>
                </div>

                <div>
                  <ion-icon name="home-outline"></ion-icon>
                <span class="action_btn"><a href="menuvertical.php">Sortir</a></spam>
                </div>
          </div>
        
          </div>
        
         
      </div> 
      
        
          
       
          
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    </body>
    </html>
