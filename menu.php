<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .nouv{
      margin-left:1050px;
    }

    nav{
      margin-top: -26px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      <a class='nav-link' href='relatoriocommande.php?datedebut=<?=date('Y-m-d')?> && datefin=<?=date('Y-m-d')?>'>RELATORIO</a>
        <li class="nav-item">
          <?php if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])
           && $_SESSION['stockinfoclients']->emails=="manuagondanou229@gmail.com"){
            echo " <a class='nav-link' href='produits.php'>PRODUIT</a>";
              }
            ?>
         </li>
        <li class="nav-item">
        <?php if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])
           && $_SESSION['stockinfoclients']->emails=="manuagondanou229@gmail.com"){
           echo " <a class='nav-link' href='listeclient.php'>LISTE CLIENTS</a>";
            }
            ?>
        </li>
       
        
        <li class="nav-item nouv">
          <?php if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients']))
          echo "<a class='nav-link' href='pagedeconnexion.php'>se deconnecter</a>";
            else echo "<a class='nav-link' href='connexionclient.php'>se connecter</a>";

          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>SITE DE VENTE</h3>
  
</div>

</body>
</html>


