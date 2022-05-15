

<!DOCTYPE html>
<html>
    <head>
        <title>PIED DE PAGE OK</title>
        <link rel="stylesheet" type="text/css" href="stylepied.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
         rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
        <!--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
         rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QKPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">-->

          <style>


* {
    margin: 0;
    padding: 0;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('ifood11.jpg') center repeat-y;

    margin-top: 200px;
    height: 10px;
}

ul {
    position: relative;
    display: flex;
    transform-style: preserve-3d;
    transform: rotate(-25deg) skew(25deg);
}

ul li {
    position: relative;
    list-style: none;
    width: 60px;
    height: 60px;
    margin: 0 10px;
}

ul li ::before {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 100%;
    height: 10px;
    background: #2a2a2a;
    transform-origin: top;
    transform: skew(-41deg);
}

ul li ::after {
    content: '';
    position: absolute;
    top: 0;
    left: -9px;
    width: -9px;
    height: 100%;
    background: #2a2a2a;
    transform-origin: right;
    transform: skew(-49deg);
}

ul li span {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex !important;
    justify-content: center;
    background: #e4405f;
    color: rgba(255, 255, 255, 255);
    font-size: 30px !important;
    transition: 0.2s;
    align-items: center;
}

ul li:hover span {
    z-index: 1000;
    transition: 0.5s;
    color: #fff;
    box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.05);
}

ul li:hover span:nth-child(5) {
    transform: translate(40px, -40px);
    opacity: 1;
}

ul li:hover span:nth-child(4) {
    transform: translate(30px, -30px);
    opacity: 0.8;
}

ul li:hover span:nth-child(3) {
    transform: translate(20px, -20px);
    opacity: 0.6;
}

ul li:hover span:nth-child(2) {
    transform: translate(10px, -10px);
    opacity: 0.4;
}

ul li:hover span:nth-child(1) {
    transform: translate(0px, 0px);
    opacity: 0.2;
}

ul li:nth-child(1) :hover span {
    background: #3b5999;
}

ul li:nth-child(2) :hover span {
    background: #55acee;
}

ul li:nth-child(3) :hover span {
    background: #25D366;
}

ul li:nth-child(4) :hover span {
    background: #3b5999;
}

ul li:nth-child(4) :hover span {
    background: #0077b5;
}

ul li:nth-child(5) :hover span {
    background: #e4405f;
}

footer{
    width: 100%;
    margin-left: 400px;
}
          </style>

    </head>
    <body>
        <footer>
        <ul>
            <li>
                <a href="https://m.facebook.com/story.php?story_fbid=145567110766878&substory_index=0&id=100059407688631&sfnsn=wiwspmo" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-facebook"></span>
                </a>
            </li>

            <li>
                <a href="https://mobile.twitter.com/@EAgondanou" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-twitter"></span>
                </a>
            </li>
               
            <li>
                <a href="https://web.whatsapp.com/send?phone=+5584999928818" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-whatsapp"></span>
                </a>
            </li>
               
            <li>
                <a href="https://www.youtube.com/channel/UCKs6offQmDotipM50_CbVtw" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-youtube"></span>
                </a>
            </li>

            <li>
                <a href="https://www.instagram.com/p/CUSimwultlBFdLWPyrs0GOM2LMpI1IBaOyKeBw0/?utm_medium=copy_link" target="_blank">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="fa fa-instagram"></span>
                </a>
            </li>
        </ul>
</footer>

    </body>
</html>