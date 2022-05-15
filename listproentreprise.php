<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
//echo $_GET['emailss'];
$vlox=afficherproduitboutiques($_GET['emails']);
echo $_GET['emails'];

  
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

        .kio{
          margin-left: 25px;
        }

        .jol{
          margin-top: -15px;
        }
     
      </style>


    <body> 

    <div class="card">
    <h1 class="hita">LISTE DES PRODUITS</h1>
  <table>
    <thead>
      <tr><a href="cadastroprod.php" class="jol">Ajouter produits</a>
                    <th>IMAGE PRODUIT</th>
                    <th>CODE</th>
                    <th>NOM</th>
                    <th>PRIX</th>
                    <th>REDUCTION</th>
                    <th>DATE DE PERENTION</th>
                    <th>ACTION</th>
     </tr>
    </thead>

    <tbody>
    <?php while($produits=$vlox->fetch()){?>
      
    <tr>
    <td><img src="../IMAGES/<?=$produits['imageproduit']?>" class="fix"></td>
    <td><?=$produits['codproduit']?></td>
    <td><?=$produits['nomproduit']?></td>
    <td><?=$produits['prix'].'€'?></td>
   <td><?=$produits['reduction']?></td>
   <td><?=$produits['dateperention']?></td>
   <td><span class="action_btn"><a href="modifierproduits.php?idproduit=<?=$produits['idproduit']?>">Modifier</a>
  <a href="supprimerproduits.php?idproduit=<?=$produits['idproduit']?>">Supprimer</a> </span></td>
                     
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
   <tfoot>
   <span class="action_btn"><a href="menuvertical">SORTIR</a>
   
  </span>
   </tfoot>
</div>
</body>
</html>