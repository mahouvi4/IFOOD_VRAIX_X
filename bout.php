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

.oko{
    margin-top: 10px;
}
        </style>
    </head>
     <body>
     
        
        <label>
            <input type="radio" name="btn"  value="1" <?php if($_GET['statut']==1)echo "checked";?>/>
             <span></span>
             </label>

              <label>
             <input type="radio" name="btn" value="0" <?php if($_GET['statut']==0)echo "checked";?>/>
             <span></span>
             </label>
             <input type="submit" value="Valider" name="oko" class="oko"/>
    
     </body>
</html>