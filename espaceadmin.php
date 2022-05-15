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

.A{
          margin-left:-470px;
          margin-top: -270px;
          width: 200px;
          height: 130px;
          object-fit: cover;
    box-shadow: 0 2px 12px #000000;
    border-radius: 5%;
    position: fixed;
    background: linear-gradient(315deg, #fff, #000000);


      }

      .B{
        margin-left:-200px;
          margin-top: -270px;
          width: 200px;
          height: 130px;
          object-fit: cover;
    box-shadow: 0 2px 12px #000000;
    border-radius: 5%;
    position: fixed;
    background: linear-gradient(315deg, #ff0058, #26a69a, #000000);

      }
      
      .C{
        margin-left:95px;
        margin-top:-270px ;
          
          width: 200px;
          height: 130px;
          object-fit: cover;
    box-shadow: 0 2px 12px #000000;
    border-radius: 5%;
    position: fixed;
    background: linear-gradient(315deg, #ff0058, #33E3FF, #000000);

      }

      .D{
       
          margin-left: 390px;
          margin-top: -265px;
          width: 200px;
          height: 130px;
          object-fit: cover;
    box-shadow: 0 2px 12px #000000;    
    border-radius: 5%;
    position: fixed;
    background: linear-gradient(315deg, #000000, #ffbc00,#000000);

      }

      .E{
       
      margin-left: -470px;
       width: 200px;
       height: 130px;
       object-fit: cover;
 box-shadow: 0 2px 12px #000000;
 border-radius: 5%;
 position: fixed;
 background: linear-gradient(315deg, #33E3FF, #ffbc00);

   }

   .F{
       
    margin-left: -200px;
        width: 200px;
        height: 130px;
        object-fit: cover;
  box-shadow: 0 2px 12px #000000;
  border-radius: 5%;
  position: fixed;
  background: linear-gradient(315deg, #000000,#9E1389);

  
    }
    
    .G{
       
        margin-left: 95px; 
           width: 200px;
           height: 130px;
           object-fit: cover;
     box-shadow: 0 2px 12px #000000;
     border-radius: 5%;
     position: fixed;
     background: linear-gradient(315deg, #ff0058, #000000);
 
       }

       .H{
       
       margin-left: 390px; 
          width: 200px;
          height: 130px;
          object-fit: cover;
    box-shadow: 0 2px 12px #000000;
    border-radius: 5%;
    position: fixed;
    background: linear-gradient(315deg,#000000, #fff, #000000);
   background-color:#000000;
      }

      .I{
          margin-left: -360px;
          margin-top: 180px;
          width: 800px;
          height: 130px;
          object-fit: cover;
    box-shadow: 0 2px 12px #000000;
    border-radius: 5%;
    position: fixed;     
    background: linear-gradient(315deg,#E41B2D,#000000, #139E61);

      }
   
      
    .row {
         margin-left: 10px;
         margin-top: 50px;
         text-align: center;
     } 

     p{
        font-family: 'Aharoni', sans-serif;
        font-size: 1.5em;
        color:#fff;

     }

     .blout{
            width: 87px;
              text-align: center;
              background-color: #1B86E4;
           font-size: 25px;
           margin-left: 70px;
           overflow: hidden;
            border-radius: 20%;
            margin-left: 300px;
            box-shadow: 0 3px 15px #fff;
            font-family: 'Aharoni', sans-serif;

         }

         .jik{
            width: 87px;
              text-align: center;
              background-color: #1B86E4;
           font-size: 25px;
        
           overflow: hidden;
            border-radius: 20%;
            margin-left: 100px;
            margin-top: -40px;
            box-shadow: 0 3px 15px #fff;
            font-family: 'Aharoni', sans-serif;

         }
      ::-webkit-scrollbar{
                width: 10px;
               
                background-color: #ff246f;

            }
        </style>
    </head>
     <body>
     <div class=container>
     <a href="listoboutico.php">

     <div class="card A">
         <div class="row">
         <p>LISTE BOUTIQUES</p>
        </div>
         </div>
     </a>
         
     <a href="listoprod.php">
         <div class="card B">
         <div class="row">
             <p>LISTE PRODUITS</p>
         </div>
      </div>
      </a>
   
      <a href="listeclient.php">
      <div class="card C">
         <div class="row">
             <p>LISTE CLIENTS</p>
         </div>
      </div>
      </a>

         <td></td>
         <a href="listereclamation.php">
      <div class="card D">
         <div class="row">
             <p>LISTE RECLAMATIONS</p>
         </div>
      </div>
      </a>
      <td></td>
        
      <a href="indexfox.php">
      <div class="card E">
         <div class="row">
             <p>GOOGLE MAPS</p>
         </div>
      </div>
      </a>
       
      <a href="listeallcommande.php">
      <div class="card F">
         <div class="row">
             <p>LISTE COMMANDES</p>
         </div>
      </div>
      </a>
      
      <a href="cadastrobout.php">
      <div class="card G">
         <div class="row">
             <p>ADD-BOUTIQUES</p>
         </div>
      </div>
      </a>

      <a href="listecliboutique1.php  ">
      <div class="card H">
         <div class="row">
             <p>LISTE-CLI ENTREPRISE</p>
         </div>
      </div>
      </a>


     
      <div class="card I">
         <div class="row">
         <a onclick="return confirm('Voulez vous quitter Vraiment Cette Page?')" href='menuvertical.php'>
                            <button type="submit" class="blout" >
                         <span class="glyphicon glyphicon-save">HOME</span>
                          </button>
                            </a>
         </div>


         <div class="row jik">
         <a onclick="return confirm('Voulez vous aller  Vraiment a la Page2?')" href='espaceadmin2.php'>
                            <button type="submit" class="blouta" >
                         <span class="glyphicon glyphicon-save">PAGE-ADMIN2</span>
                          </button>
                            </a>
         </div>
      </div>
     
     
      
   </div>
</div>
        
</body>
</html>