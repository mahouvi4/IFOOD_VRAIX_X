<?php

require_once('LESFONCTIONS/fonctions.php');
$vixo = afficherboutique();

//var_dump($vixo->fetchAll());

if(isset($_SESSION['boutique']) && !empty($_SESSION['boutique'])){
    $idboutique=$_SESSION['boutique']->idboutique;
    } 
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>MENU ARABE</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="">


 <style>
         h1{
             text-align: center;
             color:#fff ;
             font-family: "Brush Script MT", Times, serif;
             font-size: 5em;

         }

            body{
                
                background: url('R.jpg') center repeat-y;
                background-size:cover;
                height:100vh;
                overflow-y: auto;
 

            }

            ::-webkit-scrollbar{
                width: 10px;
                height: 5px;
                background-color: #ff246f;

            }

         /*#menu {
  position: fixed;
  right: 0;
  top: 50%;
  width: 8em;
  margin-top: -2.5em;
}*/     

            .menudropdown{
                
                width:auto;
                height: 100%;
                margin:0px auto;
                margin-left:-10px;
                margin-top:-250px;
                
               
                position:absolute; /*pour fixer la bare de menue et coulisser les autres pages en dessous!!*/
            }

            .menudropdown ul{
                padding:0px;
            }

            .menudropdown ul li{
                float:left;
                background-color:black;
                color:white;
                width:222px;
                height:70px;
                line-height:50px;
                font-size:25px;
                text-align:center;
                opacity:0.8;
                

            }

            .menudropdown > ul li{
                margin-top: 10px;
                
            }

             .menudropdown ul li ul{
                 display:none;
             }

             .menudropdown ul li:hover > ul{
                 display:inline-block;
             }

             .menudropdown ul li:hover{
                 background-color:#ff246f;
                 opacity:0.9;
             }

             .menudropdown ul li ul li ul{
                 position:relative;
                 left:200px;
                 top:0px;
                 
             }





 



 
        </style>
    </head>

    <body>
    
  
    <?php

?>
        <div class="menudropdown">
            <ul>
                <li>Usa
                    <ul>
                        <li>New York</li>
                    </ul>
                </li>

                <li>India
                  <ul>
                      <li>Pune</li>
                      <li>Munbai</li>
                      <li>Bangalor
                          <ul>
                              <li>Kutub Minar</li>
                              <li>Red Fort</li>
                          </ul>
                      </li>
                      <li>Dehradum</li>
                      <li>Delhi</li>
                  </ul>
                </li>
                <li>France
                   
                  <ul>
                  <li>Pune</li>
                      <li>Munbai</li>
                      <li>Bangalor
                          <ul>
                              <li>Pune</li>
                              <li>Munbai</li>
                              <li>Bangalor</li>
                          </ul>
                      </li>
                      <li>Dehradum</li>
                      <li>Delhi</li>
                  </ul>

                </li>
                <li>Italia
                    <ul>
                    <li>Divers</li>
                    <li>Fruits</li>

                    </ul>
                </li>
                <li>Australie
                        
                <ul>
                  <li>Pune</li>
                      <li>Munbai</li>
                      <li>Bangalor
                          <ul>
                              <li>Pune</li>
                              <li>Munbai</li>
                              <li>Bangalor</li>
                          </ul>
                      </li>
                      <li>Dehradum</li>
                      <li>Delhi</li>
                  </ul>

                </li>
                <li>Brasil</li>
                
          </ul>
        

        
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




    
  
  
  
   </body>
</html>