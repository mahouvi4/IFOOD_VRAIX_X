<?php
require_once('LESFONCTIONS/fonctions.php');
$lik = listereclamation();

  
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

        h1.hita{
         text-align: center;
        }

        .card{
            width: 100%;
            margin-left: 150px;
            margin-top: -60px;
        }
      </style>

    <body> 

    <div class="card">
    <h1 class="hita">LISTE DES RECLAMATIONS</h1>
  <table>
    <thead>
      <tr>
                    
                    <th>NOM EXPEDITEUR</th>
                    <th>ADRESSE ENTREPRISE</th>
                    <th>SUJET</th>
                    <th>MOTIVE</th>
                    <th>DATE-TEMPS DE PUBLICATION</th>
                    <th>MOTIVE</th>
                    
                    
     </tr>
    </thead>

    <tbody>
    <?php while($produits=$lik->fetch()){?>
      
    <tr>
    <td><?=$produits['name']?></td>
    <td><?=$produits['email'].'€'?></td>
   <td><?=$produits['subject']?></td>
   <td><?=$produits['content']?></td>
   <td><?=$produits['created']?></td>
   <td><span class="action_btn"><a href="modifierproduits.php?">Repondre</a>
  <a href="supprimprod.php?">Supprimer</a></span></td>
                     
  </tr>
         <!-- <span class="action_btn">
            <a href="#">Edit</a>
            <a href="#">Remove</a>
          </span>  -->           
      <?php
                      
    }
        ?>
</tbody>
    
  </table>
</div>
</body>
</html>