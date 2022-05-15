<?php
session_start();
include('LESFONCTIONS/fonctions.php');
//var_dump($_SESSION['stockinfoclients']);

$idclient=isset($_SESSION['stockinfoclients']->idclient);
$datecommande=date('Y-m-d');
$varaffichercommande=affichercommande($idclient,$datecommande);

     if(isset($_SESSION['adresse']) && !empty($_SESSION['adresse'])){ 
         $adresse=$_SESSION['adresse']->etats.' - '.$_SESSION['adresse']->ville.' // '.
         $_SESSION['adresse']->quartier.' - '.$_SESSION['adresse']->rue.', '.
         $_SESSION['adresse']->numeros.', CEP:'.$_SESSION['adresse']->cep;
     }

     if(isset($_SESSION['stockproduit']) && !empty($_SESSION['stockproduit'])){
      $idproduit=$_SESSION['stockproduit']->idproduit;

    }

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
          margin-left: 550px;
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
    <h2 class="hita">MES COMMANDES</h2>
  <table>
    <thead>
      <tr>
      
        <th>Code</th>
        <th>Nom-Prod</th>
        <th>Prix</th>
        <th>Quantite</th>
        
        <th>Sous-Total</th>
        <th>Date Commande</th>
        <th>Entreprise</th>
        <th>Status Commande</th>

        <th><span class="action_btn"><a href="menuvertical.php">Ajouter autres produits</a></span></th>
        
      </tr>
    </thead>

    <tbody>
    <?php 
          $total=0;
           $nbrproduit=0;
                 
            while($produits=$varaffichercommande->fetch()){?>
             <tr>
                            
             <td><?=$produits['codproduit']?></td>
             <td><?=$produits['nomproduit']?></td>
             <td><h2><?=$produits['prixcommande'].'€'?></h2></td>
             <td><?=$produits['qts']?></td>
        
             <td><?=$produits['totalcommande']?></td>
             <td><?=$produits['datecommande']?></td>
             <td><?=$produits['representantentreprise']?></td>
             <td><?=$produits['statuss']?></td>
                         
            <?php
              $total=$total+$produits['prixcommande']*$produits['qts'];
     }
        ?>
                   
           </tr>
</tbody>
    <tfoot>
                  <tr>
                      <td colspan="3"></td>
                      <td>TOTAL</td>
                      <td><h2><?=number_format($total,2).'€'?></h2></td>
                      
                  </tr>
                   <tr>
                   <td>ADRESSE DE LIVRAISON:</td>
                      <td><h2><?=$adresse?></h2></td>
                   </tr>
                   <tr>
                       <td>
                           <a href="../fpdf/ETATSS.php?idclient=<?=$idclient?>">Telecharger reçue</a>
                       </td>
                   </tr>

                   <tr>
                       <td>
                      <?php
                          if(isset($_SESSION['stockinfoclients']) &&!empty($_SESSION['stockinfoclients'])){
                            $idclient=$_SESSION['stockinfoclients']->idclient;
                           echo " <a href='indexyy.php?idclient=$idclient'> achat</a>"; 
                          } 
 
                      ?>
   

                       </td>
                   </tr>
              </tfoot>

  </table>
</div>
</body>
 
<tfooter>
     
</tfooter> 

</html>