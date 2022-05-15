
<?php

$servername='localhost';

$dbnam='id17807630_ifood';

$username='id17807630_emmanuel';

$password='&>fOI8*KC@m*1](B';
$connect = new PDO("mysql:host=$servername;dbname=$dbnam", $username, $password);
 $sql="SELECT * FROM produit";
 $vlox=$connect->query($sql);



//var_dump($vixo->fetchAll());

if(isset($_SESSION['boutique']) && !empty($_SESSION['boutique'])){
    $idboutique=$_SESSION['boutique']->idboutique;
    } 
    ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title>INSTAGRAM</title>
        <link rel="stylesheet" href="insta.css">



        <style>
          
          .story-container ul li .has-story .story {
    padding: 5px;
    background: linear-gradient(42deg, #f09433 0%, #e6683c 25%, #dc2743 70%, #cc2366 75%, #bc1888 100%);
}

          .story-container{
            width:900px;
            height: 90px;
            margin-left: 200px;
            margin-top: 300px;
            
           
          }

          .has-story{
           margin-top: -310px;
         }
 
         


        </style>
    </head>

      <body>
        
     
       
      
      <marquee>

          <div class="story-container">
              <ul>
              <?php while($reponse=$vlox->fetch(PDO::FETCH_OBJ)){?>
                 <li class="has-story">
                  <div class="story">
                    <img src="../IMAGES/<?=$reponse->imageproduit?>">
                     </div>
                       <span class="user"> <?=$reponse->nomproduit?></span>
                       
                       <?php
                       }
                         ?>
                       </li>
                         </ul>

                      
            </div>

             
    
     </marquee>
    
      </body>
</html>