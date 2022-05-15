<?php

session_start();
include('LESFONCTIONS/fonctions.php');
//echo $emails=$_GET['emails'];
if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])){
    $idclient= $_SESSION['stockinfoclients']->idclient;
   
    
}


$infoclient = $connect->query("SELECT * FROM CLIENT WHERE idclient=$idclient");
$client = $infoclient->fetch();
$nomcomplet=$client['nomclient'].' '.$client['prenomclient'];
$cpfclient=$client['cpfclient'];
$emails=$client['emails'];
$telefone=$client['telephoneclient'];



// PARTIE COMMANDE
$datecommande=date('Y-m-d');
$affichercommande = affichercommande($idclient,$datecommande);
$total=0;
$commande = $affichercommande->fetch(PDO::FETCH_OBJ);
$voco =$commande->codproduit.' '.$commande->nomproduit.' '.
$commande->prixcommande.' '.$commande->qts.' '.$commande->totalcommande.' '.
$commande->datecommande.' '.$commande->representantentreprise.' '.$total=$total+$commande->prixcommande*$commande->qts;
$adresse= $commande->etats . "   " . $commande->ville . "  " . $commande->quartier . "   " . $commande->rue . " Numero: ".$commande->numeros. " CEP: ".$commande->cep ;



//Credenciais do Pic-pay
$xPicpayToken = 'seu_token';

//URL da loja
$callbackUrl = "http://www.sualoja.com.br/callback";
$returnUrl = "http://www.sualoja.com.br/cliente/pedido/";

//Dados da fatura
$referenceId = rand(100000, 999999);
$affichercommande = affichercommande($idclient,$datecommande);
$value=0;
$value=$value+$affichercommande->prixcommande*$affichercommande->qts;

$expiresAt = "2022-05-01T16:00:00-03:00";

//Dados do comprador

$infoclient = $connect->query("SELECT * FROM CLIENT WHERE idclient=$idclient");
$client = $infoclient->fetch();




$firstName = $client['nomclient'];
$lastName = $client['prenomclient'];
$document = $client['cpfclient'];
$email = $client['emails'];
$phone = $client['telephoneclient'];

$dados = [
    "referenceId" => $referenceId,
    "callbackUrl"=> $callbackUrl,
    "returnUrl"=> $returnUrl . $referenceId,
    "value"=> $value,
    "expiresAt"=> $expiresAt,
    "buyer"=> [
      "firstName"=> $firstName,
      "lastName"=> $lastName,
      "document"=> $document,
      "email"=> $email,
      "phone"=> $phone
    ]
];


$ch = curl_init('https://appws.picpay.com/ecommerce/public/payments');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['x-picpay-token: ' . $xPicpayToken]);

$res = curl_exec($ch);
curl_close($ch);

$retorno = json_decode($res);

//var_dump($retorno);

echo "<img src='".$retorno->qrcode->base64."'><br><br>";
echo "ID da fatura: " . $retorno->referenceId . "<br>";
echo "Link da fatura: <a href='" . $retorno->paymentUrl . "' target='_blank'>Fatura</a><br>";
