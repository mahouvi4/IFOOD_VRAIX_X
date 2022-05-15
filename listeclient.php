<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
$lik = affichlisteuser();

  
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
        .blout{
            width: 87px;
              text-align: center;
              background: linear-gradient(315deg, #03a9f4, #000000, #ff0058);            

           font-size: 25px;
           margin-left: 70px;
           overflow: hidden;
            border-radius: 20%;
            margin-left: 2px;
            box-shadow: 0 3px 15px #fff;
         }

         .lil{
             color: green;
         }
      </style>

    <body> 

    <div class="card">
    <h1 class="hita">LISTE DES CLIENTS</h1>
  <table>
    <thead>
      <tr>
                    <th>IMAGE CLIENT</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>SEXE</th>
                    <th>CPF</th>
                    <th>TELEPHONE</th>
                    <th>EMAIL</th>
                    <th>STAUT</th>
                    <th>SITUATION</th>
                    <th>ACTION</th>
                    
     </tr>
    </thead>

    <tbody>
    <?php while($produits=$lik->fetch(PDO::FETCH_OBJ)){?>
      
    <tr>
    <td><img src="../IMAGES/<?=$produits->profileclient?>" class="fix"></td>
    <td><?=$produits->nomclient?></td>
    <td><?=$produits->prenomclient?></td>
    <td><?=$produits->sexclient?></td>
    <td><?=$produits->cpfclient?></td>
    <td><?=$produits->telephoneclient?></td>
   <td><?=$produits->emails?></td>
   <td> <?php 
        if($produits->status==1){
            echo "<span class='lil'><a href='bout.php?statut=$produits->status&&idclient=$produits->idclient'>Legible</a></span>";
            
        }else{
            echo "<span class='action_btn lol' ><a href='bout.php?statut=$produits->statut&&idclient=$produits->idclient'>Elegible</a></span>";
              
        }
   ?>
   </td>
   
<td>
 <?php
    if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])){
      echo " <button type='submit' name='ok'  class='blout'><span class='glyphicon glyphicon-save'>En-lign</span></button>";
      }else{
        echo " <button type='submit' name='ok'  class='blout'><span class='glyphicon glyphicon-save'>off-lign</span></button>";
    } 
 ?>

</td>

<td><span class="action_btn"><a href="modifierproduits.php?idclient=<?=$produits->idclient?>">Modifier</a>
  <a href="supprimcli.php?idclient=<?=$produits->idclient?>">Supprimer</a> </span></td>
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
    <td><span class="action_btn"><a href="menuvertical.php">SORTIR</a></span></td>

    </tfoot>
</div>
</body>
</html>