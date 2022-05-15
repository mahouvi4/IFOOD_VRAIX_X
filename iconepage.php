<?php
 require_once('LESFONCTIONS/fonctions.php');
 $vlox=afficherproduit();
 
      
       
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ICONE ACEUILLE</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" type="text/css" href="styla.css">
        <link rel="stylesheet" href="insta.css">

        <style>
            @import url('https://fonts.googleapis.com/css? family=Poppins:100,200,300,400,500,600,700,800,900');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins';
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-width: 100vh;
    background: #222;
    overflow: hidden;
}


.poi {
    margin-top: -865px;
    margin-left: -950px;

}

.container {
    
    display: flex;
    justify-content: center;
    align-items: center;
    position:relative;
}

.container .box {
    transform-style: preserve-3d;
    animation: animate 20s linear infinite;
    margin-left: -20px;
    margin-top: 140px;
}

@keyframes animate {
    0% {
        transform: perspective(1000px) rotateX(0deg) rotate(0deg);
    }
    100% {
        transform: perspective(1000px) rotateX(360deg) rotate(0deg);
    }
}

.container .box span {
    
    position: fixed;
    color: #222;
    font-size: 1em;
    white-space: nowrap;
    text-transform: uppercase;
    font-weight: 1000;
    padding: 0 10px;
    background: linear-gradient(90deg, transparent, rgba(0.0.0.0.5) transparent);
    line-height: 0.76em;
    transform-style: preserve-3d;
    text-shadow: 0 5px 15px rgba(0.0.0.0.25);
    transform: translate(-50%, -50%) rotateX(calc(var(--i) * 22.5deg)) translateZ(40px);
}

.container .box span i:nth-child(1) {
    font-style: initial;
    color: #ff246f;
}

.container .box span i:nth-child(2) {
    font-style: initial;
    color: #12b5ff;
}
 
 .jilo{
     margin-top:40px;
 }
        </style>
       
    </head>
    <body>
     <div class="jilo">
         <?php
            include('menuinstagram.php');
         ?>
   </div>
  
        <div class="container">
      
           
            <div class="poi">
        
            <div class="box">
                <span style="--i:1;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:2;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:3;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:4;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:5;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:6;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:7;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:8;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:9;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:10;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:11;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:12;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:13;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:14;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:15;"><i>CSS</i> is <i>A</i> Awesome</span>
                <span style="--i:16;"><i>CSS</i> is <i>A</i> Awesome</span>

              <!-- 360/16=22.5deg-->
            </div>
            </div>
                  

        </div>

       
    
    </body>
