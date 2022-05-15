<?php
session_start();

require_once('LESFONCTIONS/fonctions.php');
if(isset($_POST['btn'])){
  $emails=$_POST['emails'];
  $motdepasse=$_POST['motpass'];
    $nomboutique=$_POST['nomboutique'];
     $heureouverture=$_POST['heureouverture'];
     $heurefermeture=$_POST['heurefermeture'];
     $jourdebutouvertures=$_POST['jourdebutouverture'];
     $jourfinouvertures=$_POST['jourfinouverture'];
     $jourfermetures=$_POST['jourfermeture'];
     $contacteboutique=$_POST['contacteboutique'];
     $localisation=$_POST['localisation'];
     $photo=$_FILES['nix']['name'];
    $imageboutique=$_FILES['nix']['tmp_name'];
    move_uploaded_file($imageboutique,"../images/".$photo);
    enregistrerboutique($emails,$motdepasse,$nomboutique,$heureouverture,$heurefermeture,$jourdebutouvertures,$jourfinouvertures,$jourfermetures,$contacteboutique,$localisation,$photo);
    header('location:connectbout.php');
  
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
    background: linear-gradient(#fff,#83d8ff );
    border-radius: 50%;
    transform: translate(-450px, -420px);
}


section::after {
    content: '';
    position: absolute;
    width: 350px;
    height: 350px;
    background: linear-gradient(#e91e63, #83d8ff);
    border-radius: 50%;
    transform: translate(450px, 420px);
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

.nix{
  margin-top: 25px;
}
.lax{
    margin-left: 400px;
    margin-top: 15px;
}

.tio{
    margin-top: -12px;
    margin-left: -15px;
}

.cox{
    margin-top: px;
}

  .vio{
    margin-top: -20px;
    margin-left: 14px;
}

.xla{
    margin-left: 400px;
}

.jik{
    margin-left: -350px;
    color: black;
}


::-webkit-scrollbar{
                width: 10px;
                height: 5px;
                background-color: #ff246f;

            }
      </style>
        
    </head>
    <body>
        
         <section>
             <div class="container">
                 <h2>Creation Compte Boutique</h2>
    <form method="POST" enctype="multipart/form-data">

    <div class="row100">
                 <div class="col">
                     <div class="inputBox">
                         <input type="file" name="nix" class="nix" required="required">
                     </div>
                 </div>

             
                 <div class="col">
                     <div class="inputBox">
                         <input type="email" name="emails" class="teco" required="required">
                         <span class="text">Email</span>
                         <span class="line"></span>
                     </div>
                 </div>
                 </div>

                 <div class="row100">
                 <div class="col">
                     <div class="inputBox">
                         <input type="password" name="motpass" class="tal" required="required">
                         <span class="text">Mot de Passe</span>
                         <span class="line"></span>
                     </div>
                 </div>
             
             
                 <div class="col">
                     <div class="inputBox">
                         <input type="text" name="nomboutique" class="xio" required="required">
                         <span class="text">Nom Boutique</span>
                         <span class="line"></span>
                     </div>
                 </div>
                 </div>

                 

                 <div class="row100">
                 <div class="col">
                     <div class="inputBox">
                         <input type="time" name="heureouverture" class="cox" required="required">
                         <span class="text">Heure Ouverture</span>
                         <span class="line"></span>
                     </div>
                 </div>
                 </div>

           
            
                 <div class="row100">
                 <div class="col">
                     <div class="inputBox">
                         <input type="time" name="heurefermeture" class="cox" required="required">
                         <span class="text">Heure Fermeture</span>
                         <span class="line"></span>
                     </div>
                 </div>
             
             
                 <div class="col">
                     <div class="inputBox">
                         <input type="text" name="contacteboutique" class="flox" required="required">
                         <span class="text">Contact</span>
                         <span class="line"></span>
                     </div>
                 </div>
                 </div>
               
                 <div class="row100">
                 <div class="col">
                   <div class="inputBox textarea">
                       <textarea  name="localisation" rows="12px" required="required"></textarea>
                       <span class="text">Adresse</span>
                         <span class="line"></span>
                   </div>
               </div>
               </div>
                
               <div class="row100">
                 <div class="col">
               <h1><label>Jours ouvrables:</label></h1>
      
      <select class="xix" name="jourdebutouverture">
         
       <option value="Lundi" >Lundi</option>
       <option value="Mardi">Mardi</option>
       <option value="Mercredi" >mercredi</option>
       <option value="Jeudi">jeudi</option>
       <option value="Vendredi" >vendredi</option>
       <option value="Samedi" >samedi</option>
       <option value="Dimanche" >dimanche</option>
       </select> à 
       <select class="xox" name="jourfinouverture">
         
         <option value="Lundi" >Lundi</option>
       <option value="Mardi">Mardi</option>
       <option value="Mercredi" >mercredi</option>
       <option value="Jeudi">jeudi</option>
       <option value="Vendredi" >vendredi</option>
       <option value="Samedi" >samedi</option>
       <option value="Dimanche" >dimanche</option>
         </select>
       <br>
       </div>
       </div>

       <div class="row100 jik">
        <div class="col">
       <h2><label>Jour fermé:</label></h2>
       <select class="xla" name="jourfermeture">
       <option value="Lundi" >Lundi</option>
       <option value="Mardi">Mardi</option>
       <option value="Mercredi" >mercredi</option>
       <option value="Jeudi">jeudi</option>
       <option value="Vendredi" >vendredi</option>
       <option value="Samedi" >samedi</option>
       <option value="Dimanche" >dimanche</option>
       </select><br></br>
       </div>
       </div>      
                 
               <div class="row100">
               <div class="col">
                  <input type="submit"  value="VALIDER" name="btn" class="btn" id="btn">
               </div>
             </div>
             </form>
             </div>
         </section>
        
    </body>
    </html>