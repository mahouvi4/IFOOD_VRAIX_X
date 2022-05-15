<?php
require_once('LESFONCTIONS/fonctions.php');
$lik = afficherboutiquesimple(); 

  
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
    <h1 class="hita">LISTE DES BOUTIQUES</h1>
  <table>
    <thead>
      <tr>
                   <th>IMAGE BOUTIQUE</th>
                    <th>NOM</th>
                    <th>H OUVERTURE</th>
                    <th>H FERMETURE</th>
                    <th>CONTACT</th>
                    <th>OUVERT</th>
                    <th>FIN OUVERT</th>
                    <th>JOUR FERIE</th>
                    <th>EMAILS</th>
                    <th>ACTION</th>
                    <th>PRODUITS</th>
                   
     </tr>
    </thead>

    <tbody>
    <?php while($boutique=$lik->fetch()){?>
                    <tr>
                    <td><img src="../IMAGES/<?=$boutique['imageboutique']?>" class="fix"></td>
                     <td><?=$boutique['nomboutique']?></td>
                      <td><?=$boutique['heureouverture']?></td>
                      <td><?=$boutique['heurefermeture']?></td>
                      <td><?=$boutique['contacteboutique']?></td>
                      <td><?=$boutique['jourdebutouverture']?></td>
                      <td><?=$boutique['jourfinouverture']?></td>
                      <td><?=$boutique['jourfermeture']?></td>
                       <td><?=$boutique['emailss']?></td>
   <td><span class="action_btn"><a href="modifierboutique.php?idboutique=<?=$boutique['idboutique']?>">Modifier</a>
   <a href="supprimerbout.php?idboutique=<?=$boutique['idboutique']?>">Supprimer</a></span></td>
   <td><a href="adminconnectbout.php?idboutique=<?=$boutique['idboutique']?>">Produtos</a></span></td>

                     
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