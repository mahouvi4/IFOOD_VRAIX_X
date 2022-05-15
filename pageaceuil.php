<?php
    header("Refresh:6; url=menuvertical.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGE ACCEUIL</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <style>




* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.loader {
   margin-top: 50px;
  position: relative;
    width: 100%;
    height: 300px;
    background: #1a1a1f;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.5s;
    color: #fff;
    overflow: hidden;
    -webkit-box-reflect: below 1px linear-gradient(transparent, #0004)
}


body{
    font-family: "Brush Script MT", Times, serif;

}




.loader:hover {
    background: #03e9f4;
    color: #050801;
    box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 5px #03e9f4, 0 0 200px #03e9f4,
}

.loader span {
    position: absolute;
    display: block;
}

.loader span:nth-child(1) {
    top: 0;
    left: 0;
    width: -100%;
    height: 5px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: animate1 2s linear infinite;
    animation-delay: 0s;
}

@keyframes animate1 {
    0% {
        left: -100%;
    }
    50%,
    100% {
        left: 100%;
    }
}

.loader span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: -100%;
    height: 5px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation: animate3 2s linear infinite;
    animation-delay: 1s;
}

@keyframes animate3 {
    0% {
        right: -100%;
    }
    50%,
    100% {
        right: 100%;
    }
}

.loader span:nth-child(2) {
    top: -100%;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: animate2 2s linear infinite;
    animation-delay: 0.5s;
}

@keyframes animate2 {
    0% {
        top: -100%;
    }
    50%,
    100% {
        top: 100%;
    }
}

.loader span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #03e9f4);
    animation: animate4 2s linear infinite;
    animation-delay: 1.5s;
}

@keyframes animate4 {
    0% {
        bottom: -100%;
    }
    50%,
    100% {
        bottom: 100%;
    }
}

.loader h2 {
    font-family: consolas;
    color: #03e9f4;
    overflow: hidden;
    letter-spacing: 2px;
    transition: 2s;
    border-right: 1px solid #03e9f4;
    animation: typing 5s steps(26) infinite;
    
}

.loader:hover h2 {
    color: #111;
    border-right: 1px solid #111;
    
}

@keyframes typing {
    0%,
    90%,
    100% {
        width: 0px;
    }
    30%,
    60% {
        width: 123.89px;
    }
}
        </style>
    </head>
    <body>
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            
          <h2>Bienvenu a Manu Platium...</h2>  
          <!-- count total number of character in loading. . . "text=10-->
        </div>
    </body>
</html>