<?php
session_start();
ob_start();
//include('suivietempoclient.php');
require_once('LESFONCTIONS/fonctions.php');
 $emails=$_GET['emails'];

//unset($_SESSION['boutiques']);
//var_dump($_SESSION['adresse']);
//var_dump($_SESSION['stockproduit']);
//unset ($_SESSION['stockproduit']);
//var_dump($_SESSION['stockinfoclients']);
//unset($_SESSION['stockinfoclients']);
//session_destroy($_SESSION['stockinfoclients']);
//var_dump($_SESSION['boutiques']);


    if(isset($_POST['vbs'])){

          if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])){
            $idclient=$_SESSION['stockinfoclients']->idclient;
           header('location:commando.php?emails=$emails');
          }else if(!$_SESSION['stockinfoclients']){
          {
          header("location:connectcli.php?emails=$emails"); 
          return;
         } 
        }
     
           if(isset($_SESSION['adresse']) && !empty($_SESSION['adresse'])) {
            $idadresse=$_SESSION['adresse']->idadresse;

          }


        $datecommande=date('Y-m-d');
        //if (isset($_SESSION['stockproduit']) && !empty($_SESSION['stockproduit'])) {
         if(isset($_SESSION['stockproduit']) && !empty($_SESSION['stockproduit'])){
            foreach($_SESSION['stockproduit'] as $produits){
              $idproduit=$produits['idproduit'];
              $prixcommande=$produits['prixproduit'];
              $quantitecommande=$produits['quantite'];
              $totalcommande=$produits['totalcommande'];
              insertioncommande($idproduit,$idclient,$idadresse,$quantitecommande,$prixcommande,$totalcommande,$datecommande);
              header("location:commando.php?$emails");
              unset($_SESSION['stockproduit']);
             
}
         
   }
}

      
  
     

      
     
ob_end_flush();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css"  href="pan.css"/>
      
    </head>
      <style>
        .qts{
              width: 40px;
              text-align: center;
              background-color: #ff0058;
           font-size: 25px;
           margin-left: 70px;
           overflow: hidden;
            border-radius: 20%;
            margin-left: 2px;
            box-shadow: 0 3px 15px #fff;
         }
          
         
         .blout{
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

        td{
            text-align: center;  
        }

           

          .hita{
            text-align: center;
  
          }

         div .tia{
           
           margin-top: 250px;
           margin-left: 200px;
         }

      .tifo a{
           left: -300px;
         }

         .lol{
           margin-top: -220px;
         }
      </style>

    <body> 
    <?php
          include('menui22.php');
      ?>
      <ul></ul>
    <div class="hil">
      
  <div class="card tia">
  <h1 class="hita">VOTRE PANIER</h1> <h5 class="tifo"><a href='descriptachat.php?emails=<?=$_GET['emails']?>'>Autre-Produit</a></h5>

  <table>
    <thead>
      <tr>
        
        <th>Image</th>
        <th>Code</th>
        <th>Nom-Prod</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>Sous-Total</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      
      <tr>
<?php
$total=0;
  if(isset($_SESSION['stockproduit']) && !empty($_SESSION['stockproduit'])) {
     foreach($_SESSION['stockproduit'] as $key=> $produits){?>
        <tr>
            <form method="GET" action="traitement.php">
            <input type="hidden" name="key" value="<?=$key?>"/>
            <input type="hidden" name="emails" value="<?=$produits['representantentreprise']?>"/>
            <td><img src="../IMAGES/<?=$produits['imageproduit']?>"></td>
            <td><?=$produits['codproduit']?></td>
             <td><?=$produits['nomproduit']?></td>
             <td><?=$produits['prixproduit']?></td>
             <td>
                 
             <span class="action_btn"><input type="number" name="ekpemi" value="<?=$produits['quantite']?>" class="qts"/><button type="submit" name="update" value="update">Update</button></span>
                            
            </td>
            <td> <?=$produits['totalcommande']?></td>
             <td>
             <a onclick="return confirm('voulez vous titrer le produit?')">
                            <button type="submit" name="ok" value="<?=$key?>" class="blout">
                         <span class="glyphicon glyphicon-save">Retirer</span>
                          </button>
                            </a>
             </td>
             </form>
        </tr>
                <?php
        $total+=$produits['prixproduit']*$produits['quantite'];
            } 
                ?>
                      
            <?php
         }
            ?>
      </tbody>
           
      <tfoot>
                    <tr>
                        <td colspan="4"></td>
                        <td><h2>Total:</h2></td>
                        <td><h1><strong><?=number_format($total,2).'€'?></strong></h1></td>
                    </tr>
                </tfoot>

  </table>
  <?php
     if(isset($_SESSION['stockproduit']) && !empty($_SESSION['stockproduit'])){
                include('valider.php');
            }
           ?>



        </div>
       
</body>
<tfooter>
     
       
     
</tfooter> 

</html>