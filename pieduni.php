


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PROFIL UTILISATEUR</title>
        <meta charset="UTF -8">
        <link rel="stylesheet" type="text/css">
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
                <link rel="stylesheet" type="text/css" href="soo.css">
        
        <style>

            

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: consolas;
}

.container {
    margin-left: 30px;
    margin-top: 70px;
    align-items: center;
    flex-wrap: wrap;
    padding: 40px 0;
}

.container .box {
    position: relative;
    width: 320px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px 30px;
    transition: 0.5s;
}

.container .box::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50px;
    width: 50%;
    height: 100%;
    background: #fff;
    border-radius: 8px;
    transform: skewX(15deg);
    transition: 0.5s;
}

.container .box::after {
    content: '';
    position: absolute;
    top: 0;
    left: 50px;
    width: 50px;
    height: 100%;
    background: #fff;
    border-radius: 8px;
    transform: skewX(15deg);
    transition: 0.5s;
    filter: blur(30px);
    transition: 0.5s;
}

.container .box:hover:before,
.container .box:hover:after {
    transform: skewX(0deg);
    left: 20px;
    width: calc(100% - 90px);
}

.container .box:nth-child(1):before,
.container .box:nth-child(1):after {
    background: linear-gradient(315deg, #ffbc00, #ff0058);
}

.container .box:nth-child(2):before,
.container .box:nth-child(2):after {
    background: linear-gradient(315deg, #03a9f4, #ff0058);
}

.container .box:nth-child(3):before,
.container .box:nth-child(3):after {
    background: linear-gradient(315deg, #4dff03, #00d0ff);
}

.container .box span {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 50;
    pointer-events: none;
}

.container .box span::before {
    content: '';
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 8px;
    background: rgba(225, 225, 225, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: 0.5s;
    animation: animate 2s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 05);
}

.container .box:hover span::before {
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;
    opacity: 1;
}

.container .box span::after {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    border-radius: 8px;
    background: rgba(225, 225, 225, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: 0.5s;
    animation: animate 2s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 05);
    animation-delay: -1s;
}

.container .box:hover span::after {
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;
    opacity: 1;
}

@keyframes animate {
    0%,
    100% {
        transform: translateY(10px);
    }
    50% {
        transform: translateY(-10px);
    }
}

.container .box .content {
    position: relative;
    left: 0;
    padding: 20px 40px;
    background: rgba(225, 225, 225, 0.05);
    background: 0 5px 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    backdrop-filter: blur(10px);
    z-index: 1;
    transition: 0.5s;
    color: #fff;
}

.container .box:hover .content {
    left: -25px;
    padding: 60px 40px;
}

.container .box .content h2 {
    font-size: 2em;
    color: #fff;
    margin-bottom: 10px;
}

.container .box .content p {
    font-size: 1.1em;
    margin-bottom: 10px;
    line-height: 1.4em;
}

.container .box .content a {
    display: inline-block;
    font-size: 1.1em;
    color: #111;
    background: #fff;
    padding: 10px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 700;
    margin-top: 5px;
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

::-webkit-scrollbar {
    width: 10px;
    height: 5px;
    background-color: #ff246f;
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
height: 250px;
margin-top:400px ;
width: 98%;
margin-left:-20px;
}

ul li label{
    top:70px;
    left: -70px;
    
}

p{
    color:#fff ;
    
}




        </style>
       
    </head>
    <body>
    <div class="card yol">
    
      <div class="content">
      
        <div class="goj">
        <ul>
              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-gift" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-glass" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                  </label>
              </li>

               
              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                  </label>
              </li>

              <li>
                  <label>
                      <input type="checkbox" name="">
                      <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                  </label>
              </li>

          </ul>
         
   
    </div>
  </div>
 
</div> 


 
     
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
