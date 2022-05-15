<?php

global $connect;
$connect = new PDO("mysql:host=localhost;dbname=ifood", "root", "");


if (isset($_GET['idclient']))
    $ids = $_GET['idclient'];
else
    $ids = 0;

if (isset($_GET['as']))
    $as = $_GET['as'];
else
    $as =affichlisteuser();

$infoclient = $pdo->query("SELECT * FROM client WHERE id=$ids");
$client = $infoclient->fetch();

$nom_prenom = strtoupper($client['nomclient'] . "  " . $client['prenomclient']);

$dateenregistrement = dateEnToDateFr($client['dateenregistrement']);

$contact = strtoupper($client['emails']);




$affichercommande = $pdo->query("SELECT codproduit,imageproduit,nomproduit,nomclient,prixcommande, sum(quantitecommande) 
as qts,datecommande,sum(totalcommande) as totalcommande,etats , ville,quartier,rue,numeros,cep 
FROM produit as p,commandes as cm,adresse 
as a ,client as c WHERE p.idproduit=cm.idproduit 
AND c.idclient=cm.idclient AND a.idadresse=cm.idadresse AND c.idclient=$ids AND datecommande='$as'
GROUP BY cm.idproduit");										/*AND id_stagiaire=$ids
										AND annee_scolaire='$as'*/
$commande = $affichercommande->fetch();

$codproduit = strtoupper($commande['codproduit']);

$nomproduit = strtoupper($commande['nomproduit']);

$quantitecommande = strtoupper($commande['qts']);

$prixcommande = strtoupper($commande['prixcommande']);

$totalcommande = strtoupper($commande['totalcommande']);

$etats = strtoupper($commande['etats']);

$ville = strtoupper($commande['ville']);

$quartier = strtoupper($commande['quartier']);

$rue = strtoupper($commande['rue']);

$numeros = strtoupper($commande['numeros']);

$cep = strtoupper($commande['cep']);

$datecommande = dateEnToDateFr($commande['datecommande']);







require('fpdf.php');

//Création d'un nouveau doc pdf (Portrait, en mm , taille A5)
$pdf = new FPDF('P', 'mm', 'A5');

//Ajouter une nouvelle page
$pdf->AddPage();

// entete
$pdf->Image('en-tete.png', 10, 5, 130, 20);

// Saut de ligne
$pdf->Ln(18);


// Police Arial gras 16
$pdf->SetFont('Arial', 'B', 16);

// Titre
$pdf->Cell(0, 10, 'SOLICITATION DE COMMANDE', 'TB', 1, 'C');
$pdf->Cell(0, 10, 'N°:', 0, 1, 'C');

// Saut de ligne
$pdf->Ln(5);

// Début en police Arial normale taille 10

$pdf->SetFont('Arial', '', 10);
$h = 7;
$retrait = "      ";

$pdf->Write($h, "Je soussigné, Directeur de l'établissement CLEVER SCHOOL 2 PRIVEE EL ATTAOUIA Certifie que : \n");

$pdf->Write($h, $retrait . "le client : ");

//Ecriture en Gras-Italique-Souligné(U)
$pdf->SetFont('', 'BIU');
$pdf->Write($h, $nom_prenom . "\n");

//Ecriture normal
$pdf->SetFont('', '');



$pdf->Write($h, $retrait . "CIN N° : " . $cin . " \n");



$pdf->Write($h, $retrait . "Ayant effectué dans mon entreprise l'achat d'un/des  produit(s) dont le code :  " . $codproduit . " \n");

$pdf->Write($h, $retrait . " du nom  :  " . $nomproduit . "  \n");

$pdf->Write($h, $retrait . "Quantite :  " . $quantitecommande . " \n");

$pdf->Write($h, $retrait . "A une somme totale de :  " . $prixcommande . "  \n");

$pdf->Write($h, $retrait . "le  :  " . $as . "  \n");

$pdf->Write($h, "pour l'adresse de livraison  " . $etats . "   " . $ville . "  " . $quartier . "   " . $rue . "  ".$numeros. "  ".$cep." \n");

$pdf->Write($h, "reconnait avoir accepté et  adheré a ce que la livraison de la commande du client me soit livré  que des qu'il aura effectué le paiement sur le compte officiel de IFOOD   . \n");

$pdf->Cell(0, 5, 'Fait à SAO PAULO Le :' . date('d/m/Y'), 0, 1, 'C');

// Décalage de 20 mm à droite
$pdf->Cell(20);
$pdf->Cell(80, 8, "Le directeur pédagogique de l'établissement", 1, 1, 'C');

// Décalage de 20 mm à droite
$pdf->Cell(20);
$pdf->Cell(80, 5, "Mr LAHCEN ABOUSALIH", 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C'); // LR Left-Right
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'C');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LRB', 1, 'C'); // LRB : Left-Right-Bottom (Bas)

//Afficher le pdf
$pdf->Output('', '', true);
?>

