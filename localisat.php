<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
//var_dump($_SESSION['boutique']);
if (isset($_SESSION['boutique']) &&!empty($_SESSION['boutique'])) {
    echo  $idboutique=$_SESSION['boutique']->idboutique;
    


    if (isset($_POST['btn'])) {
        
        $adresseentreprise=$_POST["ender"];
        $latitudeentreprise=$_POST['lato'];
        $longitudeentreprise=$_POST['longo'];
  

        $connect= new PDO("mysql:host=localhost; dbname=ifood", "root", "");
        $sql="INSERT INTO markers(addentreprise,lat,lng,idboutique)VALUES(?,?,?,?)";
        $varenregistrerboutique=$connect->prepare($sql);
       echo  $varenregistrerboutique->execute(array($adresseentreprise,$latitudeentreprise,$longitudeentreprise,$idboutique));
       var_dump($varenregistrerboutique->fetchAll());
       if ($varenregistrerboutique->rowCount()) {
            $adresse= afficheraddboutique($idboutique);
            if ($flox=$adresse->fetch(PDO::FETCH_OBJ)) {
                $_SESSION['adresseboutique']=$flox;
                header('location:enregistrementproduits.php');
            }
        } else {
            echo "Adresse non trouvé";
        }
    }
} 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>LOCALISATION GOOGLE MAPS</title>
        <meta charset="UTF -8">
        <style>
        .gog{
            width: 250px;
            height: 40px;
        }
        </style>
    </head>
    <body>
        <form method="POST">


        <h2> ADRESSE:<br><input type="text" name="ender" class="gog" placeholder="adresse da empresa ..." /></h2><br>   

        <h2> lATITUDE:<br><input type="text" name="lato" class="gog" placeholder="latitude da empresa ..." /></h2><br>   

        <h2> LONGITUDE:<br><input type="text" name="longo" class="gog" placeholder="longitude da empresa ..." /></h2><br>   

        <input type="submit" name="btn"  value="VALIDER"/>


        </form>
    </body>
</html>