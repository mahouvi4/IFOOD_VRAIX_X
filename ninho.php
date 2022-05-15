<?php
include('LESFONCTIONS/fonctions.php');
if(isset($_POST['oko'])){
    $statut=$_POST['btn'];
     modifierstatutclient($statut,$_GET['idclient']);
     header('location:listeclient.php');
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BOUTON CSS</title>
        <link rel="stylesheet" href="stiko.css">

        <style>
            body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
    background: linear-gradient(315deg,#03a9f4, #000000, #ff0058);            

}

.row{
    margin-top: -330px;
    margin-left: 670px;
    
}

        </style>
    </head>
     <body>
     
     <div class=container>
     
         <div class="row">
         <a href="connectadmin.php">
      
         <div class="row">
             <p>.</p>
        
      </div>
      </a>
    
      </div>
   </div>
           
    
     </body>
</html>