<?php
require_once('LESFONCTIONS/fonctions.php');
$vlox=afficherproduit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .dog{
          
          height: 100px;
          
      }
      .digo{
          border:solid 2px black;
          width:100px;
      }
      #trix{
         
          width: 50px;
          margin-left: 10px;
      }


  </style>
</head>
<body>
<h2 class="digo">Ifood Gallery</h2>
  <div id="trix">
  <?php 
   include('emoji.php');
  ?>
  </div>
<div class="container">
  
  <p>Click on the images to enlarge them.</p>
  <div class="row">
  <?php while($reponse=$vlox->fetch(PDO::FETCH_OBJ)){?>

    <div class="col-md-2">
        <marquee>
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="../IMAGES/<?=$reponse->imageproduit?>" alt="Lights" style="width:70%">
          <div class="caption">
            <p>THANK GOD</p>
          </div>
        </a>
      </div>
      </marquee>
    </div>
    
    <?php
  }
  ?>
  </div>
 
</div>

</body>
</html>


