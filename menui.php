<?php

require_once('LESFONCTIONS/fonctions.php');
$vixo = afficherboutique();
$lox = affichlisteuser();
//echo $emails=$_GET['emails'];
//var_dump($_SESSION['stockinfoclients']);
//var_dump($_SESSION['boutique']);

//var_dump($_SESSION['stockinfoclients']);
//unset($_SESSION['stockinfoclients']);
if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])){
      $idadmin = $_SESSION['admin']->idadmin;
}

//var_dump($vixo->fetchAll());

if(isset($_SESSION['boutique']) && !empty($_SESSION['boutique'])){
    $idboutique=$_SESSION['boutique']->idboutique;
    } 
    ?>
<?php
    include('iconepage.php');
      
?>
    
   


<!DOCTYPE html>
<html>
    <head>
        <title>MENU ARABE</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styleo.css">


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
                margin-top:-20px;
                position:absolute;
                /*position:fixed-> pour fixer la bare de menue et coulisser les autres pages en dessous!!*/
            }
            
            .menudropdown ul{
                padding:0px;
            }

            .menudropdown ul li{
                float:left;
                background: linear-gradient(315deg,#001923, #001923, #ff0058);            

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



.card .content .goj .imgBx{
               margin-left: -58px;
               margin-top: -40px;
           }


 div .card{

    margin-top: 160px;
    margin-left: 150px;
    left: 200px;
    
}

p{
    margin-top:350px ;
    margin-left: 400px;
}

 a{
   text-decoration: none !important;
   color:#fff;
   font-family: "aharoni", Times, serif;
    }
 
        </style>
    </head>

    <body>
    
  
    <?php

?>
        <div class="menudropdown">
            <ul>
                <li>
                <a class='nav-link' href='index2.php'>CONTACT-NOUS</a>

                    
                </li>
                    

                <li> <?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])
                      && $_SESSION['admin']->mail=="manuagondanou229@gmail.com"){
                     echo "<a style='text-decoration:none' class='nav-link' href='listoboutico.php'>LISTE BOUTIQUE</a>";
                    }else{
                        echo "<a style='text-decoration:none'class='nav-link' href='listeclient.php'>OLOLO</a>";

                    }
                    ?>
                  <ul>
                   
                   <li>
                      <?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])
                      && $_SESSION['admin']->mail=="manuagondanou229@gmail.com"){
                        echo "<a style='text-decoration:none' class='nav-link' href='listoprod.php'>LISTE PRODUITS</a>";

                    }
                    ?>

                  <li>
                      <?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])
                      && $_SESSION['admin']->mail=="manuagondanou229@gmail.com"){
                     echo "<a style='text-decoration:none' class='nav-link' href='listeclient.php'>LISTE CLIENTS</a>";
                    }
                    ?>
                      </li>
                      </li>
                      
                      <li>
                      <?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])
                      && $_SESSION['admin']->mail=="manuagondanou229@gmail.com"){
                     echo "<a style='text-decoration:none' class='nav-link' href='relatoriocommande.php?datedebut='date('Y-m-d')'&&datefin='date('Y-m-d')''>RELATORIO</a>";
                    }
                    ?>
                      </li>
                    
    
                  </ul>
                </li>
                <li>
                <?php if(isset($_SESSION['boutique']) && !empty($_SESSION['boutique'])
                      && $_SESSION['boutique']->emailss=="lucia@gmail.com"){
                        echo "<a style='text-decoration:none' class='nav-link' href='cadastrobout.php'>ADD-BOUTIQUE</a>";
                    }else{
                        echo "<a class='nav-link' href='apropos.php'>A-PROPOS</a>";

                    }
                    ?>
                  <ul>
                  <li>
                  <?php if(isset($_SESSION['boutique']) && !empty($_SESSION['boutique'])
                      && $_SESSION['boutique']->emailss=="lucia@gmail.com"){
                        echo "<a class='nav-link' href='cadastroprod.php'>ADD-PRODUIT</a>";
                    }
                    ?>
                  </li>
                      <li>
                      <?php if(isset($_SESSION['boutique']) && !empty($_SESSION['boutique'])
                      && $_SESSION['boutique']->emailss=="lucia@gmail.com"){
                        echo "<a class='nav-link' href='connectentreprisepro.php'>LIST-PRO-BOUT</a>";
                    }
                    ?>
                       <ul>
                              <li>
                              <?php if(isset($_SESSION['boutique']) && !empty($_SESSION['boutique'])
                      && $_SESSION['boutique']->emailss=="lico@gmail.com"){
                        echo "<a class='nav-link' href='cadastroprod.php'>LIST-CLI-BOUT</a>";
                    }
                    ?>
                              </li>
                             
                              
                          </ul>
                      </li>
                      
                  </ul>

                </li>
                <li><?php if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])
                      && $_SESSION['stockinfoclients']){
                    
                       echo" <a class='nav-link' href='forumcss.php?'>PUBLIER-FORUM</a>";
                       
                    }else{
                        echo "<a class='nav-link' href='connectionpageforum2.php'>FORUM</a>";
                         }?>
                    <ul>
                    <li>
                    <?php if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])
                      && $_SESSION['stockinfoclients']){    
                    echo"<a class='nav-link' href='connectionpageforum2.php'>FORUM</a>";
                }?>
                    </li>
                    

                    </ul>
                </li>
                <li><?php if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])
                      && $_SESSION['stockinfoclients']){
                          $idclient = $_SESSION['stockinfoclients']->idclient;
                         
                             
                     echo "<a class='nav-link' href='commandomenu.php?idclient=$idclient'>LISTE-COMMANDE</a>";
                    }else{
                        
                        echo "<a class='nav-link' href='listeclient.php'>INFO CLIENTS</a>";
  
                    }
                    ?>
                        
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
                      
                  </ul>

                </li>
                <li class="fas fa-user"><?php if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])
                      && $_SESSION['stockinfoclients']){
                        $lox = affichlisteuser();
                        $idclient = $_SESSION['stockinfoclients']->idclient;
                          $nomclient = $_SESSION['stockinfoclients']->nomclient;
                          echo " $nomclient  
                            <ul>
                            <li><a style = color:#52FF33 class='nav-link' href='menuvertical.php'>SE DECONNECTER</a></li>
                            </ul> ";
                            unset($_SESSION['stockinfoclients']);
                                 
                    }else{
                        if(isset($_SESSION['boutique']) && !empty($_SESSION['boutique'])){
                            $idboutique=$_SESSION['boutique']->idboutique;
                            $nomboutique = $_SESSION['boutique']->nomboutique;
                            echo "$nomboutique  
                              <ul>
                              <li><a style = color:#52FF33 class='nav-link' href='menuvertical.php'>SE DECONNECTER</a></li>
                              </ul> ";
                              unset($_SESSION['boutique']);
                            }else{echo "<a style = color:#FCFF33 class='nav-link' href='connectnomalcli.php'>SE CONNECTER</a>";
                            } 
                          
                        
                } 
                    
                        ?>
                    
                </li>
          </ul>
         <h1>Bienvenu Chez Manu_Platium!!</h1>
       

        
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



   
    
  
  
 
   </body>
</html>