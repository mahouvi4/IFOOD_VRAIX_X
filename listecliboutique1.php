<?php
session_start();
include('LESFONCTIONS/fonctions.php');


$varaffichercommande=listallcomand();
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css"  href="coma.css"/>
    </head>
      <style>
        td{
          text-align: center;
        }

        .hita{
          margin-left: 100px;
          text-align: center;
        }

        div .tia{
         position: relative;
           margin-top: 180px;
           height: 82%;
           width: 1600px;
         }
      </style>

    <body> 
    <?php
          include('menui22.php');
      ?>
   
    <div class="card tia">
    <h2 class="hita">LISTE DES BOUTIQUES ET LEUR CLIENTS</h2>
  <table>
    <thead>
      <tr>
        
      
        <th>nom complet client</th>
        <th>Entreprise</th>
        


        
      </tr>
    </thead>

    <tbody>
    <?php 
        while($produits=$varaffichercommande->fetch()){?>
             <tr>
                            
          
             
            
          
             <td><?=$produits['nomclient']?></td>
             <td><?=$produits['representantentreprise']?></td>
             <!--<td><span class="action_btn"><a href="connectclicom.php">Voir-detail</a></span>-->

                         
            <?php
        
     }
        ?>
                   
           </tr>
</tbody>
    <tfoot>
                   
                   
              </tfoot>

  </table>
</div>
</body>
 
<tfooter>
     
</tfooter> 

</html>