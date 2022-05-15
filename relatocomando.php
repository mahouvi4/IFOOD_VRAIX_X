<?php
session_start();
include('LESFONCTIONS/fonctions.php');
if(isset($_SESSION['stockinfoclients']) &&!empty($_SESSION['stockinfoclients'])){
    echo $idclient=$_SESSION['stockinfoclients']->idclient;
}
$datecommande=date('Y-m-d');
$datecommandedebut=isset($_GET['datedebut'])?$_GET['datedebut']:'';
$datecommandefin=isset($_GET['datefin'])?$_GET['datefin']:$datecommande;
$varaffichercommande=afficherrelatoriocommande($datecommandedebut,$datecommandefin,$idclient);
  

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
          margin-left: 550px;
        }

        div .tia{
         position: relative;
           margin-top: 130px;
           height: 82%;
        
         }

        .btn{
            width: 87px;
              text-align: center;
              background-color: #ff0058;
           font-size: 25px;
           margin-left: 70px;
           overflow: hidden;
            border-radius: 20%;
            margin-left: 2px;
            box-shadow: 0 3px 15px #fff;
        }
      </style>

    <body> 
    <?php
          include('menui22.php');
      ?>
    </div> 
    <div class="card tia">
    <h1 class="hita">RELATORIO</h1>
  <table>
  <form method="GET">
                <input type="date" name="datedebut" class="debut" value="<?=date('Y-m-d')?>" class="cham"/>
                <input type="date" name="datefin" class="fin" value="<?=date('Y-m-d')?>" class="cham"/>
                <input type="submit" value="ENTER" name="btn" id="btn" class="btn" />

            </form> 
    <thead>
      <tr>
        <th>Code</th>
        <th>Nom-Prod</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>Sous-Total</th>
        <th>Date Commande</th>
        <th>Entreprise</th>

       <!-- <th><span class="action_btn"><a href="menuvertical.php">Ajouter autres produits</a></span></th>-->
        
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
                      <td><h2><?=number_format($total,2)?></h2></td>
                      
                  </tr>
                  
              </tfoot>

  </table>
</div>
</body>
<tfooter>
       
</tfooter> 
</html>