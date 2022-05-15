<?php
$servername='localhost';
$dbnam='id17807630_ifood';
$username='id17807630_emmanuel';
$password='S6UhL*%<}]j>p8QC';

try{

   $connect= new PDO("mysql:host=$servername;dbname=$dbnam", $username, $password);

    }catch(PDOException $e){

    die('ERREUR A LA CONNEXION DE LA BASE DE DONNEE'.$e->getMessage());

    }
?>

