<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
$vlox=afficherfor();
//var_dump($vlox->fetchAll());

//var_dump($vlox->fetchAll);
/*<a href="#" class="btn btn-primary">Acceder a l'article</a>
<a href="#" class="btn btn-warming">Editer</a>*/
  
    if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])){
        $idclient=$_SESSION['stockinfoclients']->idclient;
} 

  if(isset($_POST['motiveforum'])){
      $motiveforum=$_POST['motiveforum'];
  }
  
   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" type="text/css">
       <style>


@import url('https://fonts.googleapis.com/css? family=Poppins:100,200,300,400,500,600,700,800,900');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    body {
        background: url('R.jpg');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: grid;
        justify-content: center;
        align-items: center;
        overflow-y: auto;
       
    }
    
    .card {
        top: 100px;
        margin-top: 20px;
        margin-left: 150px;
        position: relative;
        width: 700px;
        height: 300px;
        background: rgba(225, 225, 225, 0.1);
        backdrop-filter: blur(8px);
        box-shadow: 0 25px 25px rgba(0, 0, 0, 0.5);
        border-radius: 20px;
        overflow: hidden;
        border-top: 1px solid rgba(255, 255, 255, 0.5);
        transition: 1s;
        display: flex;
        justify-content: center;
        align-items: center;
        display: grid;
    }
    
    
    
    .card::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 25px;
        /*background: #fff;*/
       
    }
    
    .card.content {
        position: relative;
        display: flex;
        align-items: center;
        margin-top: -80px;
        gap: 20px;
    }
    
    .card .content .imgBx {
        position: relative;
        width: 120px;
        height: 120px;
        overflow: hidden;
        margin-left: 10px;
        border-radius: 50%;
        box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.1);
    }
    
    img {
        width: 25PX;
    }
    
    .card .content .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin-left: 0px;
        object-fit: cover;
    }
    
    .card .content .details {
        display: flex;
        margin-left: -50px;
        margin-top: 10px;
        flex-direction: column;
        gap: 10px;
        color: #fff;
       

    }
    
    .card .content .details div {
        display: flex;
        align-items: center;
        gap: 10px;
       
    }
    
    .card .content .details h3 {
        font-weight: 600;
    }
    
    .card .content .details ion-icon {
        font-size: 1.4em;
    }
    
    .goj {
        margin-top: 20px;
        margin-left: 75px;
    }
    
    .card .content .details h3 {
        font-weight: 600;
    }
    
    .card .content .details ion-icon {
        font-size: 1.4em;
    }
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

margin-left: -800px;
left: 200px;
}

div .card{
    margin-top: 20px;
    margin-bottom: 50px;
}

a{
    margin-left: 500px;
   
}

.action_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: -40px;
    margin-left: -50px;

    font-size: 25px;
           margin-left: 20px;
           overflow: hidden;
            border-radius: 20%;
            margin-left: 2px;
            box-shadow: 0 3px 15px #000000;
         
}

.action_btn>a {
    text-decoration: none;
    color: #444;
    background: linear-gradient(315deg, #000000, #ff0058, #000000);
    border: 1px solid;
    display: inline-block;
    padding: 7px 10px;
    margin-left: 550px;
    font-weight: bold;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
}

.action_btn>a:nth-child(1) {
    border-color: #26a69a;
}

.action_btn>a:nth-child(2) {
    border-color: orange;
}

.action_btn>a:hover {
    box-shadow: 0 3px 8px #0003;
}

.blout{
            width: 87px;
              text-align: center;
              background: linear-gradient(315deg, #000000, #ff0058, #000000);
             height: 45px;
           font-size: 18px;
           margin-left: 87%;
           overflow: hidden;
            border-radius: 20%;
            
            box-shadow: 0 3px 15px #fff;
         }

         .btn{
            width: 87px;
              text-align: center;
              background: linear-gradient(315deg, #000000, #ff0058, #000000);
             height: 45px;
           font-size: 18px;
           margin-left: 600px;
           overflow: hidden;
            border-radius: 20%;
            
            box-shadow: 0 3px 15px #fff;
         }

         #popup{
            
             position: fixed;
             top: 40%;
             left: 30%;
             transform: translate(-50%, -50%);
             width: 600px;
             padding: 50px;
             box-shadow: 0 5px 30px rgba(0,0,0.30);
             background-color: #ff0058;
             visibility: hidden;
             opacity: 0;
             transition: 0.5s;
            
         }
       
          .container#blur.active{
            pointer-events: none;
             user-select:none;
         }

         #popup.active{
             opacity: 1;
             transition: 0.5s;
             visibility: visible;
         }
         
         .bolo{
            max-width: 1500px;
         }

       </style>
    </head>
    <body>
    <?php while($reponse=$vlox->fetch(PDO::FETCH_OBJ)){?>
      
        <div class="container">
        <div id="blur">
      <div class="card">
      <!--<a href="forumcss.php?idclient=<?=$idclient?>">-->
     <button type="submit" name="livo" class="blout">
     <span class="glyphicon glyphicon-save">Repondre</span>
    </button>
    </a>
      <div class="content">

              <div class="goj">
              <div class="imgBx">
              <img src="../IMAGES/<?=$reponse->profileclient?>">
              </div>
             
              <div class="details">
                  
              <form method="GET" action="essaimodal.php">
                  <div>
                  <ion-icon name="man-outline"></ion-icon>
                      <span><?=$reponse->nomclient ." " .$reponse->prenomclient?></span>
                  </div>

                 
                  <div>
                  <ion-icon name="calendar-outline"></ion-icon>
                      <span><?=$reponse->datepublication?></span>
                  </div>
                    
                  <div>
                  <ion-icon name="logo-pinterest"></ion-icon>
                      <span><?=$reponse->titreforum?>:</span>
                  </div>

                <div>
                  <ion-icon name="logo-wechat"></ion-icon>
                      <span><?=$reponse->motiveforum ?></span>
                      <input type="hidden" name="motiveforum"  class="bolo"value="<?=$reponse->motiveforum?>">
                      </div>
                   
                   <span class="action_btn">
                  <button type="submit" name="btn" class="btn" onclick="toggle()">+Info</span></button>
                           
                </form>
                  </div>
               
        
             
          </div>
        
          </div>
         
          </div> 

         
      </div> 
      <?php
          }

          
     ?>
        
<div id="popup">
<p>
<h2>Salut !!</h2><?php
if(isset($_GET['motiveforum']) && !empty($_GET['motiveforum'])){
    echo $_GET['motiveforum'];

}

   ?>
</p>
<span><a href="#" onclick="toggle()">Close</a></span>
 </div>
 </div>
  
   
 

    
 <script type="text/javascript">
    function toggle(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
    }
 </script>
      
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    </body>
    </html>
