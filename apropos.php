


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" type="text/css">
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
                <link rel="stylesheet" type="text/css" href="soo2.css">
        
        <style>

            

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: consolas;
}



.card {
   
    position: absolute;
    width: 1200px;
    height: 400px;
    background: rgba(225, 225, 225, 0.1);
    backdrop-filter: blur(8px);
    box-shadow: 0 25px 25px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    overflow: hidden;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    transition: 1s;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
    margin-top: -200px;
}


/*espace botom................................*/

.ent {
    background: linear-gradient(315deg, #fff, #ff0058);
    font-size: 30px;
    margin-left: 70px;
    overflow: hidden;
    border-radius: 20%;
} 
        .vox{
            width: 150px;
            height:100px;
           margin-top: -500px;
           overflow: hidden;
           border-radius: 50%;
          
        }

        body {
    background: url('ifood11.jpg') center repeat-y;
    background-size: cover;
    height: 100vh;
    overflow-y: auto;
}



.lob{
    margin-left: 425px;
    margin-top: -450px;
}

h1{
    margin-left: -120px;
    font-size: 30px;
}

.ciu{
    margin-left: 5px;
    margin-top:-150px;
}
     
.qt{
    height: 40px;
    font-size: 40%;
    margin-left: 25px;
    text-align: center;
}

.ttl{
    height: 40px;
    margin-left: 70px;
    text-align: center;
}
/*  partie pied 2*/ 
.yol{
height: 650px;
margin-top:400px ;
width: 95%;
margin-left:-20px;
margin-top: -10px;
}

ul li label{
    top:230px;
    left: -70px;
    
}

p{
    color:#fff ;
    
}

div.lok{
    margin-top: -400px;
    text-align:center;
    margin-left: 10%;
    color: #ff0058;
}

.jiu{
    margin-top: 450px;
    left: -600px;
}


        </style>
       
    </head>
    <body>
    <div class="card yol">
      <div class="lok">
      <p> <h1>BIENVENU A MANU PLATIUM</h1></p>

      </div>
     
    
    <p> La forme libre
La poésie en vers libres est apparue à la fin du 19e et au début du 20e siècle. Les auteurs désiraient amener la poésie plus loin, ce que les formes fixes ne permettaient pas. 
Ce changement permettra à de nouvelles possibilités créatrices d'émerger puisque le poème de forme libre ne répond à aucune règle, tant sur la longueur des vers, la longueur des strophes, 
la disposition du poème sur la page, etc. Même la rime n'est plus un élément indispensable dans cet univers poétique.



Comme il n’y a aucune règle, une même forme pourra donner lieu à des caractéristiques variées.
 Certains auteurs reprennent quelques dispositions classiques alors que d’autres utilisent des formes totalement éclatées. 
 Les auteurs jouent alors avec les espaces, les variations dans la longueur des vers, la ponctuation, la disposition des mots sur la page, etc.
 
     </p>
     <a href="menuvertical.php" class="jiu">RETOUT</a>
</div> 


<?php
      
      include('piedpago.php');
         ?>
     
           <script  type="text/javascript" src="jquery.js"></script>
<script src="../CSS/jquery.elevatezoom.min.js" type="text/javascript"></script>
<script>
    $("#im").elevateZoom();
</script>

<script>

function total(ambroise){
document.getElementById('ttl').value=document.getElementById('pprix').value*ambroise
}


</script>
    
     </div>  
    
</body>
</html>
