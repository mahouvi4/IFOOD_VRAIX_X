<?php
ob_start();
//session_start();
require('../fpdf/fpdf.php');
//Création d'un nouveau doc pdf (Portrait, en mm , taille A5)
$pdf = new FPDF('P', 'mm', 'A5');
require_once('../LESFONCTIONS/fonctions.php');
//$connect= new PDO("mysql:host=localhost; dbname=ifood", "root", "");
$idclient= $_GET['idclient'];

$infoclient = connect()->query("SELECT * FROM client WHERE idclient=$idclient");
$client = $infoclient->fetch();

$nom_prenom = strtoupper($client['nomclient'] . "  " . $client['prenomclient']);

$contact = strtoupper($client['emails']);

// PARTIE COMMANDE
$datecommande=date('Y-m-d');
$affichercommande = affichercommande($idclient,$datecommande);
//var_dump($affichercommande->fetch(PDO::FETCH_OBJ));

/*AND id_stagiaire=$ids
										AND annee_scolaire='$as'*/
                                        


//Ajouter une nouvelle page
$pdf->AddPage();

// entete
$pdf->Image('en-tete.png', 10, 5, 130, 20);

// Saut de ligne
$pdf->Ln(18);

$pdf->SetFont('Arial', 'B', 16);

// Titre
$pdf->Cell(0, 10, 'SOLICITATION DE COMMANDE', 'TB', 1, 'C');
$pdf->Cell(0, 10, 'N°:', 0, 1, 'C');

// Saut de ligne
$pdf->Ln(5);

// Début en police Arial normale taille 10

$pdf->SetFont('Arial', 'I', 10);
$h = 7;
$retrait = "      ";

$pdf->Write($h, "Je soussigné, Directeur de l'établissement CLEVER SCHOOL 2 PRIVEE EL ATTAOUIA Certifie que : \n");

$pdf->Write($h, $retrait . "le client : ");

$pdf->SetFont('', 'BIU');
$pdf->Write($h, $nom_prenom . "\n");

//Ecriture normal
$pdf->SetFont('', '');


$pdf->Write($h, $retrait . "Ayant effectué ........ l'achat d'un/des  produit(s) dont le  : \n");

while ($commande = $affichercommande->fetch(PDO::FETCH_OBJ)) {
$pdf->Write($h, $retrait."code:"  .$commande->codproduit . " \n");

$pdf->Write($h, $retrait . " du nom  :  " . $commande->nomproduit . "  \n"); 

$pdf->Write($h, $retrait . "prix :  " . $commande->prixcommande.'$' ." \n");

$pdf->Write($h, $retrait . "Quantite :  " . $commande->qts . " \n");

$pdf->Write($h, $retrait . "A une somme totale de :  " . $commande->totalcommande.'$' . "  \n");

$pdf->Write($h, $retrait . "a la date  :  " . $commande->datecommande ." \n\n");

$entreprise= $commande->representantentreprise." \n\n";



$adresse= $commande->etats . "   " . $commande->ville . "  " . $commande->quartier . "   " . $commande->rue . " Numero: ".$commande->numeros. " CEP: ".$commande->cep ;

    
}








// Police Arial gras 16

$pdf->Write($h, "dans l'entreprise dont l'adresse  :  " . $entreprise." \n\n");


$pdf->Write($h,   "  pour  l'adresse de livraison: " . $adresse ."  \n");

$pdf->Write($h, "reconnait avoir accepté et  adheré a ce que la livraison de la commande du client lui soit livré  que lorsqu'il aura effectué le paiement sur le compte officiel de IFOOD   . \n");


//Ecriture en Gras-Italique-Souligné(U)







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
$pdf->Output();
ob_end_flush();
?>

