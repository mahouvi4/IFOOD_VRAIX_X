<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once './connexionbase.php';
require './lib/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Manu - Como criar o formulario de contato e enviar e-mail e salvar no bd</title>
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
    transform: translate(-450px, -300px);
}


section::after {
    content: '';
    position: absolute;
    width: 350px;
    height: 350px;
    background: linear-gradient(#e91e63, #83d8ff);
    border-radius: 50%;
    transform: translate(450px, 280px);
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

            strong{
                width: 97px;
              text-align: center;
              background-color: #ff0058;
           font-size: 32px;
           margin-top: -50px;
           overflow: hidden;
            border-radius: 20%;
            margin-left: 200px;
            box-shadow: 0 3px 15px #fff;
            }

            .bilo{
                margin-left: 150px;
            }
    
       </style>
    </head>
    <body>
    <section>
             <div class="container">
                 <h2>RECLAMATION</h2>
        <?php
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($data['SendAddMsg'])) {
            //var_dump($data);
            $query_msg = "INSERT INTO PUBLICAT (name, email, subject, content, created) VALUES (:name, :email, :subject, :content, NOW())";
            $add_msg = $connect->prepare($query_msg);

            $add_msg->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $add_msg->bindParam(':email', $data['email'], PDO::PARAM_STR);
            $add_msg->bindParam(':subject', $data['subject'], PDO::PARAM_STR);
            $add_msg->bindParam(':content', $data['content'], PDO::PARAM_STR);

            $add_msg->execute();

            if ($add_msg->rowCount()) {
                $mail = new PHPMailer(true);
                try {
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();
                    $mail->Host = 'smtp.mailtrap.io';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'fbfff34bba9dae';
                    $mail->Password = 'dce4229687c0fc';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 2525;

                    //Enviar e-mail para o cliente
                    $mail->setFrom('luxuluxu229@gmail.com', 'Atendimento');
                    $mail->addAddress($data['email'], $data['name']);

                    $mail->isHTML(true);
                    $mail->Subject = 'Recebi a mensagem de contato';
                    $mail->Body = "Prezado(a) " . $data['name'] . "<br><br>Recebi o seu e-mail.<br>Será lido o mais rápido possível.<br>Em breve será respondido.<br><br>Assunto: " . $data['subject'] . "<br>Conteúdo: " . $data['content'];
                    $mail->AltBody = "Prezado(a) " . $data['name'] . "\n\nRecebi o seu e-mail.\nSerá lido o mais rápido possível.\nEm breve será respondido.\n\nAssunto: " . $data['subject'] . "\nConteúdo: " . $data['content'];

                    $mail->send();
                    
                    $mail->clearAddresses();

                    //Enviar e-mail para o colaborador da empresa
                    $mail->setFrom('luxuluxu229@gmail.com', 'Atendimento');
                    $mail->addAddress('cineyoutub229@gmail.com', 'Cineyoutub');

                    $mail->isHTML(true);
                    $mail->Subject = $data['subject'];
                    $mail->Body = "Nome: " . $data['name'] . "<br>E-mail: " . $data['email'] . "<br>Assunto: " . $data['subject'] . "<br>Conteúdo: " . $data['content'];
                    $mail->AltBody = "Nome: " . $data['name'] . "\nE-mail: " . $data['email'] . "\nAssunto: " . $data['subject'] . "\nConteúdo: " . $data['content'];

                    $mail->send();
                    unset($data);
                    echo "Mensagem de contato enviada com sucesso!<br>";                    
                } catch (Exception $e) {
                    echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
                }
            } else {
                echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
            }
        }
        ?>
        <form name="add_msg" action="" method="POST">

<div class="row100">
    <div class="col">
        <div class="inputBox">
          
            <input type="text" name="name" id="name" placeholder="Nome completo" value="<?php
            if (isset($data['name'])) {
                echo $data['name'];
            }
            ?>" autofocus required><span class="text">NOM</span>
            <span class="line"></span>
        </div>
    </div>
</div><br><br>
              
<div class="row100">
    <div class="col">
        <div class="inputBox">
            
            <input type="email" name="email" id="name" placeholder="O melhor e-mail"  value="<?php
            if (isset($data['email'])) {
                echo $data['email'];
            }
            ?>" required>
             <span class="text">EMAIL</span>
             <span class="line"></span>
        </div>
    </div>
</div><br><br>
             
<div class="row100">
    <div class="col">
        <div class="inputBox">
           
            <input type="text" name="subject" id="subject" placeholder="Assunto da mensagem"  value="<?php
            if (isset($data['subject'])) {
                echo $data['subject'];
            }
            ?>" required>
                 <span class="text">SUJET</span>
             <span class="line"></span>
        </div>
    </div>
</div><br><br>
 
<div class="row100">
    <div class="col">
        <div class="inputBox">
            
            <input type="text" name="content" id="content" placeholder="Conteúdo da mensagem"  value="<?php
                   if (isset($data['content'])) {
                       echo $data['content'];
                   }
                   ?>" required>
                <span class="text">MOTIVE</span>
             <span class="line"></span>
        </div>
    </div>
</div><br><br>

        <div class="row100">
               <div class="col"> 
            <input type="submit" value="Enviar" name="SendAddMsg">
                </div>
         </div>  
        </form>
    </div>
</section>
    </body>
</html>
