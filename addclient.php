<?php
session_start();
require_once('LESFONCTIONS/fonctions.php');
//var_dump($_SESSION['stockinfoclients']);
echo $emails=$_GET['emails'];

if(isset($_POST['boto'])){
    if(isset($_SESSION['stockinfoclients']) &&!empty($_SESSION['stockinfoclients'])){
        $idclients=$_SESSION['stockinfoclients']->idclient;

  $etats=$_POST['etat'];
  $villes=$_POST['ville'];
  $quartiers=$_POST['quartier'];
   $rues=$_POST['rue'];
   $numeros=$_POST['numeros'];
   $cep=$_POST['cep'];
   
 
   //$connect= new PDO("mysql:host=localhost;dbname=ifood","root","");
   $sql="INSERT INTO adresse(etats,ville,quartier,rue,numeros,cep,idclient)VALUES(?,?,?,?,?,?,?)";
   $varaddadress=connect()->prepare($sql);
   $varaddadress->execute(array($etats,$villes,$quartiers,$rues,$numeros,$cep,$idclients));
      //addadress($etats,$villes,$quartiers,$rues,$cep,$numeros,$idclients);
      $adresse= afficheradresse($idclients);
      if($flox=$adresse->fetch(PDO::FETCH_OBJ)){
            $_SESSION['adresse']=$flox;
            header("location:affichagepanier.php?emails=$emails");
           }
        } 
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css"  href="cadou.css"/>
       <link rel="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
      <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

body {
    overflow-y: auto;
}



::-webkit-scrollbar{
                width: 10px;
                height: 5px;
                background-color: #ff246f;

            }


          section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    width: 100%;
    background: #001923;

    
}

section::before {
    content: '';
    position: absolute;
    width: 400px;
    height: 400px;
    background: linear-gradient(#83d8ff, #e91e63);
    border-radius: 50%;
    transform: translate(-450px, -180px);
}


section::after {
    content: '';
    position: absolute;
    width: 350px;
    height: 350px;
    background: linear-gradient(#2196f3, #ffeb3b);
    border-radius: 50%;
    transform: translate(400px, 250px);
}

.container {
    position: relative;
    z-index: 1000;
    width: 100%;
    max-width: 1000px;
    padding: 50px;
    background: rgb(225, 225, 225, 0.1);
    box-shadow: 0 25px 45px rgb(0, 0, 0, 0.1);
    border: 1px solid rgb(225, 225, 225, 0.25);
    border-right: 1px solid rgb(225, 225, 225, 0.01);
    border-bottom: 1px solid rgb(225, 225, 225, 0.01);
    border-radius: 10px;
    overflow: hidden;
    backdrop-filter: blur(25px);
}

.container::before {
    content: '';
    position: absolute;
    top: 0;
    left: -50%;
    width: 100%;
    height: 100%;
    background: rgb(225, 225, 225, 0.05);
    pointer-events: none;
    transform: skewX(-15deg);
}

.container h2 {
    width: 100%;
    text-align: center;
    color: #fff;
    font-size: 36px;
    margin-bottom: 20px;
}

.container .row100 {
    position: relative;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}

.container .row100 .col {
    position: relative;
    width: 100%;
    padding: 0 10px;
    margin: 30px 0 20px;
}

.container .row100 .col .inputBox {
    position: relative;
    width: 100%;
    height: 40px;
    color: #fff;
}

.container .row100 .col .inputBox input,
.container .row100 .col .inputBox textarea {
    position: absolute;
    width: 100%;
    height: 100%;
    background: transparent;
    box-shadow: none;
    border: none;
    outline: none;
    font-size: 15px;
    padding: 0 10px;
    z-index: 1;
    color: #000;
}

.container .row100 .col .inputBox .text {
    position: absolute;
    top: 0;
    left: 0;
    line-height: 40px;
    font-size: 18px;
    padding: 0 10px;
    display: block;
    transition: 0.5s;
    pointer-events: none;
}

.container .row100 .col .inputBox input:focus + .text,
.container .row100 .col .inputBox input:valid + .text,
.container .row100 .col .inputBox textarea:focus + .text,
.container .row100 .col .inputBox textarea:valid + .text {
    top: -35px;
    left: -10px;
}

.container .row100 .col .inputBox .line {
    position: absolute;
    bottom: 0;
    display: block;
    width: 100%;
    height: 2px;
    background: #fff;
    transition: 0.5s;
    border-radius: 2px;
    pointer-events: none;
}

.container .row100 .col .inputBox input:focus ~ .line,
.container .row100 .col .inputBox input:valid ~ .line {
    height: 100%;
}

.container .row100 .col .inputBox .textarea {
    position: relative;
    width: 100%;
    height: 100%;
    padding: 10px 0;
}

.container .row100 .col .inputBox textarea:focus ~ .line,
.container .row100 .col .inputBox textarea:valid ~ .line {
    height: 100%;
}

.container .row100 .col input[type="submit"] {
    border: none;
    padding: 10px 40px;
    cursor: pointer;
    outline: none;
    background: #fff;
    color: #000;
    font-weight: 600;
    font-size: 18px;
    border-radius: 2px;
}

@media (max-width:768px) and (orientation: landscape) {
    .section::before {
        transform: translate(-200px, -180px);
    }
    .section::after {
        transform: translate(220px, 180px);
    }
    .container {
        padding: 20px;
    }
    .container h2 {
        font-size: 28px;
    }
}

.lax{
    margin-left: 400px;
}

.tio{
    margin-top: -12px;
    margin-left: -15px;
}

.cox{
    margin-top: 20px;
}

  .vio{
    margin-top: -110px;
    margin-left: 15px;
}
      </style>
        
    </head>
    <body>
        
         <section>
             <div class="container">
                 <h2>Adresse du Client</h2>
    <form method="POST">

            <div class="row100">
                 <div class="col">
                     <div class="inputBox">
                         <input type="text" class="form-control" name="etat" required="required">
                         <span class="text">Etat</span>
                         <span class="line"></span>
                     </div>
                 </div>

                 <div class="col">
                     <div class="inputBox">
                         <input type="text" class="form-control" name="ville" required="required">
                         <span class="text">Ville</span>
                         <span class="line"></span>
                     </div>
                 </div>
             </div>
             <div class="row100">
                 <div class="col">
                     <div class="inputBox">
                         <input type="text" class="form-control" name="quartier" required="required">
                         <span class="text">Quartier</span>
                         <span class="line"></span>
                     </div>
                 </div>

                 <div class="col">
                     <div class="inputBox">
                         <input type="text" class="form-control" name="rue" required="required">
                         <span class="text">Rue</span>
                         <span class="line"></span>
                     </div>
                 </div>
             </div>

             <div class="row100">
                 <div class="col">
                     <div class="inputBox">
                         <input type="number" class="form-control" name="numeros" required="required">
                         <span class="text">Numero</span>
                         <span class="line"></span>
                     </div>
                 </div>

                 <div class="col">
                     <div class="inputBox">
                         <input type="text" class="form-control" name="cep" required="required">
                         <span class="text">CEP</span>
                         <span class="line"></span>
                     </div>
                 </div>
             </div>


        <div class="row100">
               <div class="col">
                  <input type="submit" value="Entrer" name="boto" id="lax" class="lax">
               </div>
             </div>
             </form>
             </div>
         </section>
        
    </body>
    </html>