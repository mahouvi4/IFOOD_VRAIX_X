<?php
function connect(){
$servername='localhost';

$dbnam='id17807630_ifood';

$username='id17807630_emmanuel';

$password='&>fOI8*KC@m*1](B';

try{

    $connect = new PDO("mysql:host=$servername;dbname=$dbnam", $username, $password);
return $connect;
    }catch(PDOException $e){

    die('ERREUR A LA CONNEXION DE LA BASE DE DONNEE'.$e->getMessage());

    }

}



/*function sessionclient(){
     if(isset($_SESSION['stockinfoclients']) && !empty($_SESSION['stockinfoclients'])){
         $idclient=$_SESSION['stockinfoclients']->idclient;
     }else{
          header("location:connectcli.php"); 
     }
     return $idclient;
}*/


function enregistrerboutique($emails, $motdepasse, $nomboutique, $heureouverture, $heurefermeture, $jourdebutouvertures, $jourfinouvertures, $jourfermetures, $contacteboutique, $localisation, $photo)
{
    try {
     
        $sql="INSERT INTO boutique(emailss,motpass,nomboutique,heureouverture,heurefermeture,jourdebutouverture,jourfinouverture,jourfermeture,contacteboutique,localisation,imageboutique)VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $varenregistrerboutique=connect()->prepare($sql);
        $varenregistrerboutique->execute(array($emails,$motdepasse,$nomboutique,$heureouverture,$heurefermeture,$jourdebutouvertures,$jourfinouvertures,$jourfermetures,$contacteboutique,$localisation,$photo));

      } catch (PDOException $e) {
        die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
}


function pageconnexionboutique($emailuser, $motdepasseuser)
{
    try {
   
        $sql="SELECT * FROM boutique WHERE emailss=? AND motpass=?";
        $varpageconnexionboutique=connect()->prepare($sql);
        $varpageconnexionboutique->execute(array($emailuser,$motdepasseuser));
        return $varpageconnexionboutique;
    } catch (PDOException $e) {
        die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
}
function afficherboutiquesimple(){
  try {
    
      $sql="SELECT * FROM boutique";
      $varafficherproduit=connect()->Query($sql);
      return $varafficherproduit;
  } catch (PDOException $e) {
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
  }
}

//afficher boutique par paramentre status//------------------------------------------------------------
/*

function afficherboutiquepar($statut){
  global $connect;
   $sql="SELECT 
   emailss,imageboutique ,nomboutique, heureouverture,heurefermeture,contacteboutique,addentreprise,
   ( 3959 * acos( cos( radians(37) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(-122) )
    + sin( radians(37) ) * sin( radians( lat ) ) ) ) AS distance FROM markers 
     
    AS m , BOUTIQUE AS b  
   WHERE b.idboutique=m.idboutique" statut=?;
   $varafficherboutique=$connect->prepare($sql);
    $varafficherboutique->execute(array($statut));
   return $varafficherboutique;
 }



*/
//avec parametre
function afficherboutique(){
  
   $sql="SELECT 
   emailss,imageboutique ,nomboutique, heureouverture,heurefermeture,contacteboutique,addentreprise,
   ( 3959 * acos( cos( radians(37) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(-122) )
    + sin( radians(37) ) * sin( radians( lat ) ) ) ) AS distance FROM markers 
     
    AS m , boutique AS b  
   WHERE b.idboutique=m.idboutique";
   $varafficherboutique=connect()->query($sql);
   return $varafficherboutique;
 }


  
/*function afficherboutique(){
  global $connect;
   $sql="SELECT emailss,imageboutique ,nomboutique, heureouverture,heurefermeture,contacteboutique,addentreprise,
   FROM markers AS m , BOUTIQUE AS b
   WHERE m.idboutique=b.idboutique 
   ";
   $varafficherboutique=$connect->query($sql);
   return $varafficherboutique;
 }*/

    
   
  
  
  

  //MODIFIER BOUTIQUE

  function affichervarmodifboutique($idboutique){
    try {
    $connect= new PDO("mysql:host=localhost; dbname=ifood" ,"root","");
    $sql="SELECT * FROM boutique WHERE idboutique=?";
    $varaffichervarmodifboutique=connect()->prepare($sql);
    $varaffichervarmodifboutique->execute(array($idboutique));
    return $varaffichervarmodifboutique;
  }catch (PDOException $e) {
    die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}
     }

    

   
    /* function insereradress($nomentreprise,$adresseentreprise,$latitudeentreprise,$longitudeentreprise,$typeentreprise,$idboutique)

     {
         try {
             $connect= new PDO("mysql:host=localhost; dbname=ifood", "root", "");
             $sql="INSERT INTO markers(nomentreprise,addentreprise,lat,lng,typeentreprise, idboutique)VALUES(?,?,?,?,?,?)";
             $varenregistrerboutique=$connect->prepare($sql);
             $varenregistrerboutique->execute(array($nomentreprise,$adresseentreprise,$latitudeentreprise,$longitudeentreprise,$typeentreprise,$idboutique));
     
           } catch (PDOException $e) {
             die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
         }
     }*/


//cas particulier boutique //renvois de senha et email dans champ de saisie et s'autentifier
function affichervarmodifbout($idboutique){
  try {
 
  $sql="SELECT * FROM boutique WHERE idboutique=?";
  $varaffichervarmodifboutique=connect()->prepare($sql);
  $varaffichervarmodifboutique->execute(array($idboutique));
  return $varaffichervarmodifboutique;
}catch (PDOException $e) {
  die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}
   }






     function afficheraddboutique($idboutique){
      try {
    
      $sql="SELECT nomboutique,addentreprise FROM markers as m, boutique as b
      WHERE m.idboutique=b.idboutique AND b.idboutique=?";
      $varafficherboutique= connect()->prepare($sql);
      $varafficherboutique->execute(array($idboutique));
      return $varafficherboutique;
    }catch (PDOException $e) {
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
       }
   

     function modifierinfoboutique($nomboutique,$heureouverture,$heurefermeture,$jourdebutouvertures,$jourfinouvertures,$jourfermeture,$imageboutique,$idboutique){
      try {
      
        $sql="UPDATE boutique SET nomboutique=?,heureouverture=?,heurefermeture=?,jourdebutouverture=?,jourfinouverture=?,jourfermeture=?,contacteboutique=?,imageboutique=? WHERE idboutique=?)";
        $varmodifierinfoboutique=connect()->prepare($sql);
        $varmodifierinfoboutique->execute(array($nomboutique,$heureouverture,$heurefermeture,$jourdebutouvertures,$jourfinouvertures,$jourfermeture,$imageboutique,$idboutique));
        return $varmodifierinfoboutique;
      }catch (PDOException $e) {
        die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
        }


        
      

  function supprimerboutique($idboutique){
    try {
    
    $sql="DELETE FROM boutique WHERE idboutique=?";
    $supprimerboutique =connect()->prepare($sql);
    $supprimerboutique->execute(array($idboutique));
    return $supprimerboutique;
  }catch (PDOException $e) {
    die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}


  }

  function cibleboutiquepar($statut,$idboutique){
    try {
    $connect= new PDO("mysql:host=localhost; dbname=ifood" ,"root","");
    $sql="SELECT FROM boutique WHERE idboutique=? AND statut=?";
    $supprimerboutique =connect()->prepare($sql);
    $supprimerboutique->execute(array($statut,$idboutique));
    return $supprimerboutique;
  }catch (PDOException $e) {
    die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}


  }

  function enregistrementpubli($codpublication, $descriptpublication,$imagepublication,$idpublicateur)
  {
      try {
          $connect= new PDO("mysql:host=localhost; dbname=ifood", "root", "");
          $sql="INSERT INTO publication(codpublication,descriptpublication,imagepublication,idpublicateur)VALUES(?,?,?,?)";
          $varenregistrerproduit=connect()->prepare($sql);
          $varenregistrerproduit->execute(array($codpublication,$descriptpublication,$imagepublication,$idpublicateur));
          return $varenregistrerproduit;
      } catch (PDOException $e) {
          die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
      }
  }


    /*function afficherfor(){
      try{
     global $connect;
     $produt="SELECT profileclient ,nomclient ,prenomclient,titreforum,motiveforum,datepublication
     FROM FORUM  as f
      ,CLIENT as c WHERE  f.idclient=c.idclient
       ORDER BY  idforum DESC   ";
     $stm= $connect->prepare($produt);
     $stm->execute(array());
     return $stm;
   }catch(PDOException $e){
     die("DESOLE PROBLEME CONNEXION BASE DE DONNEE".$e->getMessage());
   }
      }*/

    
  //ESPACE PRODUIT

 
    function enregistrerproduit($categorie, $codproduit, $nomproduit, $desproduit, $prixproduit, $reds, $dateperention, $imageproduit)
    {
        try {
           
            $sql="INSERT INTO produit(representantentreprise,codproduit,nomproduit,desproduit,prix,reduction,dateperention,imageproduit)VALUES(?,?,?,?,?,?,?,?)";
            $varenregistrerproduit=connect()->prepare($sql);
            $varenregistrerproduit->execute(array($categorie,$codproduit,$nomproduit,$desproduit,$prixproduit,$reds,$dateperention,$imageproduit));
            return $varenregistrerproduit;
        } catch (PDOException $e) {
            die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
        }
    }
     //MODIFIER PRODUIT
     
  function affichervarmodifproduit($idproduit){
    try {
 
    $sql="SELECT * FROM produit WHERE idproduit=?";
    $varaffichervarmodifproduit=connect()->prepare($sql);
    $varaffichervarmodifproduit->execute(array($idproduit));
    return $varaffichervarmodifproduit;
  } catch (PDOException $e) {
    die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}
     }

     function modifierinfoproduit($codproduit,$nomproduit,$desproduit,$prixproduit,$red,$dateperention,$imageproduit,$idproduit){
      try {
      
        $sql="UPDATE produit SET codproduit=?,nomproduit=?,desproduit=?,prix=?,reduction=?,dateperention=?,imageproduit=? WHERE idproduit=?)";
        $varmodifierinfoprodui=connect()->prepare($sql);
        $varmodifierinfoprodui->execute(array($codproduit,$nomproduit,$desproduit,$prixproduit,$red,$dateperention,$imageproduit,$idproduit));
        
      } catch (PDOException $e) {
        die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
        }

  
    function afficherproduit(){

        try{
        
            $sql="SELECT * FROM produit";
            $varafficherproduit=connect()->Query($sql);
            return $varafficherproduit;
        } catch (PDOException $e) {
            die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
        }
    }
        
    function afficherproduituniq($categorie,$nomproduit){
      try {
      
          $sql="SELECT * FROM produit WHERE categorie=? AND nomproduit=?";
          $varafficherproduituniq=connect()->prepare($sql);
         $varafficherproduituniq->execute(array($categorie,$nomproduit));
         return $varafficherproduituniq->rowCount();
      } catch (PDOException $e) {
          die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
      }
  }
    
         
  function supprimerproduit($idproduit){
    try {
    $connect= new PDO("mysql:host=localhost; dbname=ifood" ,"root","");
    $sql="DELETE FROM produit WHERE idproduit=?";
    $varsupprimerproduit =connect()->prepare($sql);
    $varsupprimerproduit->execute(array($idproduit));
    return $varsupprimerproduit;
  } catch (PDOException $e) {
    die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
  }
}

function afficherachatproduit($idproduit){
  try {
    //$connect= new PDO("mysql:host=localhost; dbname=ifood" ,"root","");
    $sql="SELECT * FROM produit WHERE idproduit=?";
    $varafficherachatproduit=connect()->prepare($sql);
    $varafficherachatproduit->execute(array($idproduit));
    return $varafficherachatproduit;
  } catch (PDOException $e) {
    die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}
}

//ESPACE COMMANDE

function insertioncommande($idproduit,$idclient,$idadresse,$quantitecommande,$prixcommande,$totalcommande,$datecommande){
  try{
//$connect= new PDO("mysql:host=localhost; dbname=ifood" ,"root","");
$sql="INSERT INTO commandes(idproduit,idclient,idadresse,quantitecommande,prixcommande,totalcommande,datecommande)
   VALUES(?,?,?,?,?,?,?)";
   $varaddadresss=connect()->prepare($sql);
   $varaddadresss->execute(array($idproduit,$idclient,$idadresse,$quantitecommande,$prixcommande,$totalcommande,$datecommande));
   return $varaddadresss;
  }catch(PDOException $e){
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
  }
}


function affichercommande($idclient,$datecommande){
$produt="SELECT representantentreprise,codproduit,imageproduit,nomproduit,nomclient,prixcommande, sum(quantitecommande) 
as qts,datecommande,sum(totalcommande) as totalcommande,statuss,etats , ville,quartier,rue,numeros,cep 
FROM produit as p,commandes as cm,adresse 
as a ,client as c WHERE p.idproduit=cm.idproduit 
AND c.idclient=cm.idclient AND a.idadresse=cm.idadresse AND c.idclient=? AND datecommande=?
GROUP BY p.idproduit ";
$stm=connect()->prepare($produt);
$stm->execute(array($idclient,$datecommande));
return $stm;
}

function affichercommande2($idclient){
 
  $produt="SELECT representantentreprise,codproduit,imageproduit,nomproduit,nomclient,cpfclient,emails,prixcommande, sum(quantitecommande) 
  as qts,datecommande,sum(totalcommande) as totalcommande,etats , ville,quartier,rue,numeros,cep 
  FROM produit as p,commandes as cm,adresse 
  as a ,client as c WHERE p.idproduit=cm.idproduit 
  AND c.idclient=cm.idclient AND a.idadresse=cm.idadresse AND c.idclient=?
  GROUP BY p.idproduit ";
  $stm=connect()->prepare($produt);
  $stm->execute(array($idclient));
  return $stm;
  }
  


  
  
/*function medias($provaNome){
  global $connect;// linha de conecçao
  $sql="SELECT nota
  FROM AVALIACAO as a,PROVA as p, CANDIDATOS as c WHERE 
  c.inscriçao=a.inscriçao AND p.provaNome=a.provaNome AND p.provaNome=? ";
  $stm= $connect->prepare($sql);
  $stm->execute(array($provaNome));
  return $stm;
  }*/
  








function afficherrelatoriocommande($datecommandedebut=null,$datecommandefin=null,$idclient){
  
$produt="SELECT codproduit,imageproduit,nomproduit,nomclient,prixcommande,representantentreprise sum(quantitecommande) 
as qts,datecommande,sum(totalcommande) as totalcommande 
FROM produit as p,commandes as cm,adresse 
as a ,client as c WHERE p.idproduit=cm.idproduit 
AND c.idclient=cm.idclient AND a.idadresse=cm.idadresse  AND cm.datecommande  BETWEEN ? AND ? AND c.idclient=?
GROUP BY cm.idproduit ";
$stm= connect()->prepare($produt);
$stm->execute(array($datecommandedebut,$datecommandefin,$idclient));
return $stm;
}

function affichcomcli($idclient){
  global $connect;
  $com="SELECT nomproduit,codproduit,nomclient,cpfclient,telephoneclient,prixcommande, sum(quantitecommande) 
  as qts,sum(totalcommande) as totalcommande,datecommande,etats , ville,quartier,rue,numeros,cep ,representantentreprise
  FROM produit as p,commandes as cm,adresse 
  as a ,client as c WHERE p.idproduit=cm.idproduit 
  AND c.idclient=cm.idclient AND a.idadresse=cm.idadresse AND c.idclient=?
  GROUP BY cm.idcommande ";
  $var = connect()->prepare($com);
  $var->execute(array($idclient));
  return $var;
}

function listallcomand(){
  $produt="SELECT nomclient,prenomclient,datecommande,representantentreprise
  FROM produit as p,commandes as cm,adresse 
  as a ,client as c WHERE p.idproduit=cm.idproduit 
  AND c.idclient=cm.idclient AND a.idadresse=cm.idadresse
  GROUP BY cm.idcommande ";
  $stm= connect()->prepare($produt);
  $stm->execute(array());
  return $stm;
  
}

function dictico($idclient){
  $produt="SELECT DISTINCT nomclient,prenomclient,datecommande,representantentreprise
  FROM produit as p,commandes 
  as a ,client as c WHERE p.idproduit=cm.idproduit 
  AND c.idclient=cm.idclient AND cm.idclient=?
  GROUP BY cm.idcommande ";
  $stm=connect()->prepare($produt);
  $stm->execute(array($idclient));
  return $stm;
}




/*function listclientboutique($representantentreprise){
  global $connect;
  $produt="SELECT nomclient FROM PRODUIT as p,COMMANDES as cm,ADRESSE 
  as a ,CLIENT as c, BOUTIQUE as b WHERE p.idproduit=cm.idproduit 
  AND c.idclient=cm.idclient AND a.idadresse=cm.idadresse AND representantentreprise=?
   ";
  $stm= $connect->prepare($produt);
  $stm->execute(array($representantentreprise));
  return $stm;
  }*/

     
//ESPACE RELATION_BOUTIQUE_PRODUIT

  function afficherproduitboutiques($categorie){
      try {
       
        
        //partie affichage
          $sql="SELECT * FROM produit  WHERE representantentreprise=?";
          $varafficherproduitboutiques=connect()->prepare($sql);
          $varafficherproduitboutiques->execute(array($categorie));
          return $varafficherproduitboutiques;
      } catch (PDOException $e) {
          die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
      }
  }  

  /*function afficherproduitboutiques($categorie){
    try {
      $connect= new PDO("mysql:host=localhost; dbname=ifood", "root", "");
      //partie affichage
      $page = isset($_GET['page'])?$_GET['page']:1;
      $size = isset($_GET['size'])?$_GET['size']:5;
       $limiteparpage = ($page-1)*$size; // nombre d'affichage par page
      $compteur = "SELECT COUNT(*) an FROM PRODUIT"  ;//creer le compteur
      $execute = $connect->query($compteur); //executeur
      $parcour = $execute->fetch();
      $nbtotalaffichageproduit = $parcour['an'];
        $sql="SELECT * FROM PRODUIT LIMIT $size offset $limiteparpage WHERE representantentreprise=?";
        $varafficherproduitboutiques=$connect->prepare($sql);
        $varafficherproduitboutiques->execute(array($categorie));
        return $varafficherproduitboutiques;
    } catch (PDOException $e) {
        die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
} */
   
  




  // ESPACE CLIENTS
  function creercompteuser($nomclient,$prenomclient,$sexclient,$cpfclient,$telephoneclient,$emails,$motdepass ,$imageproduit){
     
    try{
   $sql="INSERT INTO client(nomclient,prenomclient,sexclient,cpfclient,telephoneclient,emails,motdepasse,profileclient)VALUES(?,?,?,?,?,?,?,?)";
   $varcreercompteuser=connect()->prepare($sql);
   $varcreercompteuser->execute(array($nomclient,$prenomclient,$sexclient,$cpfclient,$telephoneclient,$emails,$motdepass,$imageproduit));
   return $varcreercompteuser;
   }catch(PDOException $e){
    die("DESOLE ERREUR DE CONNEXION BASE DE DONNEE".$e->getMessage());
      
     }
   }


   function cadastrar_cliente($login,$rua,$numero,$cidade,$telephone){
     
    try{
   $sql="INSERT INTO client(login,rua,numero,cidade,telephone)VALUES(hgjklmd,rua arlindo braga negreli,406,russas,8898654555)";
   $varcreercompteuser=connect()->prepare($sql);
   $varcreercompteuser->execute(array($login,$rua,$numero,$cidade,$telephone));
   return $varcreercompteuser;
   }catch(PDOException $e){
    die("DESOLE ERREUR DE CONNEXION BASE DE DONNEE".$e->getMessage());
      
     }
   }

   function controlemail($emailsuser){

    $sql="SELECT * FROM client WHERE emails=?";
    $varcontrolemail= connect()->prepare($sql);
    $varcontrolemail->execute(array($emailsuser));
     return $varcontrolemail->fetch();
     
  
  }


  function listeclibout($representantboutique){
  
    $sql="SELECT * FROM client WHERE representantboutique=?";
    $varcontrolemail=connect()->prepare($sql);
    $varcontrolemail->execute(array($representantboutique));
     return $varcontrolemail->fetch();
     
  
  }

  //MODIFIER INFO CLIENT..............................................................................
  function updateinfocli($nomclient,$prenomclient,$sexclient,$emails,$imageproduit,$idclient){
    try {
     
      $sql="UPDATE client SET nomclient=?,prenomclient=?,emails=?,sexclient=?,cpfclient=?,telephoneclient=?,profileclient=? WHERE idclient=?";
      $varmodifierinfoboutique=connect()->prepare($sql);
      $varmodifierinfoboutique->execute(array($nomclient,$prenomclient,$sexclient,$emails ,$imageproduit,$idclient));
      return $varmodifierinfoboutique;
    }catch (PDOException $e) {
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
  }
      }

  //.......................................................................................................

   
 function pageconnexionuser($emailuser,$motdepasseuser){

  $sql= "SELECT* FROM client WHERE emails=? AND motdepasse=?";
  $varpageconnexionuser=connect()->prepare($sql);
  $varpageconnexionuser->execute(array($emailuser,$motdepasseuser));
  return $varpageconnexionuser;
}

function pagereinitialisercompte($motdepasseuser,$emailuser)
{
    

    try {
        $sql="UPDATE client SET motdepasse=? WHERE emails=?";
        $varpagereinitialisercompte=connect()->prepare($sql);
        return $varpagereinitialisercompte->execute(array($motdepasseuser,$emailuser));
    } catch (PDOException $e) {
        die("DESOLE ERREUR DE CONNEXION A LA BASE DE DONNEE".$e->getMessage());
    }
}





// modifier adresse clientt......................................................................
function afficheradresse($idclient){
  $sql="SELECT * FROM adresse WHERE idclient=?";
  $varafficheradresse=connect()->prepare($sql);
  $varafficheradresse->execute(array($idclient));
   return $varafficheradresse;
   

}

function modifieradresscli($etats,$villes,$quartiers,$rues,$numeros,$cep,$idclient){
  try {
  
    $sql="UPDATE adresse SET etats=?,ville=?,quartier=?,rue=?,numeros=?,cep=? WHERE idclient=?";
    $varmodifadresscli=connect()->prepare($sql);
    $varmodifadresscli->execute(array($etats,$villes,$quartiers,$rues,$numeros,$cep,$idclient));
    return $varmodifadresscli;
  }catch (PDOException $e) {
    die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}
    }


function affichlisteuser(){
 
   $sql="SELECT * FROM client";
   $varaffichlisteuser=connect()->query($sql);
   return $varaffichlisteuser;
 }

 //-----------------------------------------------niveau menutransparent.................................

 function affichusermenu($idclient){

   $sql="SELECT* FROM client WHERE idclient=?";
   $varaffichlisteuser=connect()->prepare($sql);
   $varaffichlisteuser->execute(array($idclient));
   return $varaffichlisteuser;

 }

 

 function listeclientboutiqo($representantboutique){
  try {
   
    
    //partie affichage
    $sql="SELECT * FROM client WHERE representantboutique=?";
    $varaffichlisteuser=connect()->prepare($sql);
    $varaffichlisteuser->execute(array($representantboutique));
    return $varaffichlisteuser;
  } catch (PDOException $e) {
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
  }
}

/*function lista_areoporto($pais){
  try {
    $connect= new PDO("mysql:host=localhost; dbname=ifood", "root", "");
   
    //partie affichage
    $sql="SELECT local, nome  FROM AREOPORTOS WHERE $pais=Portugal ";
    $varaffichlisteuser=$connect->prepare($sql);
    $varaffichlisteuser->execute(array($pais));
    return $varaffichlisteuser;
  } catch (PDOException $e) {
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
  }
}*/


 //------------------------------------------------------------------------------------------------------


function modifierstatutclient($idclient ,$statut)
{
    

    try {
        $sql="UPDATE client SET status=? WHERE idclient=?";
        $varmodifierstatutclient=connect()->prepare($sql);
        return $varmodifierstatutclient->execute(array($idclient ,$statut));
    } catch (PDOException $e) {
        die("DESOLE ERREUR DE CONNEXION A LA BASE DE DONNEE".$e->getMessage());
    }
}
 


function supprimerclient($idclient){
  try {

  $sql="DELETE FROM client WHERE idclient=?";
  $supprimerboutique =connect()->prepare($sql);
  $supprimerboutique->execute(array($idclient));
  return $supprimerboutique; 
}catch (PDOException $e) {
  die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}


}


function supprimerclientex($idclient){
  try {

  $sql = "CREATE OR REPLACE RULE r1_ex_client AS ON DELETE TO client DO INSERT INTO ex_client(idclient,nomclient,prenomclient,datesuprim)  
  VALUES(OLD.idclient,OLD.nomclient,OLD.prenomclient,now())";
  $varaffichlisteuser=connect()->query($sql);
  return $varaffichlisteuser;
}catch (PDOException $e) {
  die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
}


}

/*global $connect;
  $sql = "CREATE OR REPLACE RULE r1_ex_client AS ON DELETE TO client DO INSERT INTO ex_client 
  WHERE(OLD.idclient,OLD.nomclient,OLD.prenomclient,now())";
  $varaffichlisteuser=$connect->query($sql);
  return $varaffichlisteuser;*/

function suprimcli(){

  $sql="CREATE OR REPLACE RULE r1_ex_client AS
ON DELETE TO client
DO INSERT INTO ex_client WHERE(OLD.idclient,OLD.nomclient,OLD.prenomclient,now())";
     $varaffichlisteuser=connect()->query($sql);
     return $varaffichlisteuser;

}
//====================================================PAGE PAGAMENTO======================================================================


function infoclipagamento($cpfclient){
   $sql="SELECT * FROM client where cpfclient=?";
   $varaffichlisteuser=connect()->prepare($sql);
   $varaffichlisteuser->execute(array($cpfclient));
  return $varaffichlisteuser;
 }


//========================================================================================================================


  function insertionreclamation($typereclam ,$motiveclient ,$idclient){
    try{
      global $connect;
      $sql="INSERT INTO reclamation(typereclam ,motiveclient ,idclient) VALUES(?,?,?)";
      $viq=connect()->prepare($sql);
      $viq->execute(array($typereclam ,$motiveclient ,$idclient));
      return $viq;
     }catch(PDOException $e){
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
  }

  function insertionforum($titreforum ,$motiveforum ,$idclient){
    try{
      global $connect;
      $sql="INSERT INTO forum(titreforum ,motiveforum ,idclient) VALUES(?,?,?)";
      $viq=connect()->prepare($sql);
      $viq->execute(array($titreforum ,$motiveforum ,$idclient));
      return $viq;
     }catch(PDOException $e){
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
  }
     
  function afficherforum(){
    try {
  
    $sql="SELECT idforum, titreforum,motiveforum FROM forum WHERE idclient=? ORDER BY idforum DESC";
    $varafficherboutique=connect()->query($sql);
    return $varafficherboutique;
  } catch (PDOException $e) {
    die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
  }
     }

     function contacteradim($emails,$titreforum ,$motiveforum){
      try{
     
        $sql="INSERT INTO reclamation(emails,titreforum ,motiveforum) VALUES(?,?,?)";
        $viq=connect()->prepare($sql);
        $viq->execute(array($emails,$titreforum ,$motiveforum));
        return $viq;
       }catch(PDOException $e){
        die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
      }
    }

     /*function affichertoutforum(){
      try {
      $connect= new PDO("mysql:host=localhost; dbname=ifood" ,"root","");
      $sql="SELECT * FROM FORUM";
      $varafficherboutique=$connect->query($sql);
      return $varafficherboutique;
    } catch (PDOException $e) {
      die("DESOLE ERREUR CONNEXION BASE DE DONNEE".$e->getMessage());
    }
       }*/


       /*function affichercommande($idclient,$datecommande){
        global $connect;
        $produt="SELECT codproduit,imageproduit,nomproduit,nomclient,prixcommande, sum(quantitecommande) 
        as qts,datecommande,sum(totalcommande) as totalcommande,etats , ville,quartier,rue,numeros,cep 
        FROM PRODUIT as p,COMMANDES as cm,ADRESSE 
        as a ,CLIENT as c WHERE p.idproduit=cm.idproduit 
        AND c.idclient=cm.idclient AND a.idadresse=cm.idadresse AND c.idclient=? AND datecommande=?
        GROUP BY cm.idproduit ";
        $stm= $connect->prepare($produt);
        $stm->execute(array($idclient,$datecommande));
        return $stm;
        }*/

       function afficherfor(){
         try{
    

        $produt="SELECT profileclient ,nomclient ,prenomclient,titreforum,motiveforum,datepublication
        FROM forum  as f
         ,client as c WHERE  f.idclient=c.idclient
          ORDER BY  idforum DESC ";
        $stm= connect()->prepare($produt);
        $stm->execute(array());
        return $stm;
      }catch(PDOException $e){
        die("DESOLE PROBLEME CONNEXION BASE DE DONNEE".$e->getMessage());
      }
         }

         /*function envoiemail($nome,$email,$message)        {
     
          $connect= new PDO("mysql:host=localhost;dbname=ifood","root","");
          try{
         $sql="INSERT INTO PUBLICAT(nome,email,message)VALUES(?,?,?)";
         $varcreercompteuser=$connect->prepare($sql);
         $varcreercompteuser->execute(array($nome,$email,$message));
         return $varcreercompteuser;
         }catch(PDOException $e){
          die("DESOLE ERREUR DE CONNEXION BASE DE DONNEE".$e->getMessage());
            
           }
         }*/
  
         function listereclamation(){
      
           $sql="SELECT * FROM publicat";
           $varaffichlisteuser=connect()->query($sql);
           return $varaffichlisteuser;
         }

       /* function affich($idclient){
          global $connect;
          $sql="SELECT * FROM FORUM WHERE idclient=?";
          $varafficheradresse= $connect->prepare($sql);
          $varafficheradresse->execute(array($idclient));
           return $varafficheradresse;
           
        
        }*/
        //PARTIE PUBLICATION
        function creercomptepublicateur($nompublicateur,$prenompublicateur,$sexpublicateur,$emailpublicateur,$motdepass,$photo)        {
     
  
          try{
         $sql="INSERT INTO publicateur(nompublicateur,prenompublicateur,sexepublicateur,emailpublicateur,passpublicateur,imagepublicateur)VALUES(?,?,?,?,?,?)";
         $varcreercompteuser=connect()->prepare($sql);
         $varcreercompteuser->execute(array($nompublicateur,$prenompublicateur,$sexpublicateur,$emailpublicateur,$motdepass,$photo));
         return $varcreercompteuser;
         }catch(PDOException $e){
          die("DESOLE ERREUR DE CONNEXION BASE DE DONNEE".$e->getMessage());
            
           }
         }
  
         /*function afficherpubli(){
          try{
         global $connect;
         $produt="SELECT *
         FROM PUBLICATEUR";
         $stm= $connect->query($produt);
         
         return $stm;
       }catch(PDOException $e){
         die("DESOLE PROBLEME CONNEXION BASE DE DONNEE".$e->getMessage());
       }
          }*/
         
  function afficherpubli(){
    
    try{
    $produt="SELECT imagepublication ,descriptpublication ,codpublication,datepublication,nompublicateur
   FROM publication  as p 
    ,publicateur as b WHERE P.idpublicateur=b.idpublicateur
       ";
    $stm= connect()->query($produt);
   return $stm;
 }catch(PDOException $e){
   die("DESOLE PROBLEME CONNEXION BASE DE DONNEE".$e->getMessage());
 }
    }
      

    function pageconnexionpublicateur($emailuser,$motdepasseuser){
    
      $sql= "SELECT * FROM publicateur WHERE emailpublicateur=? AND passpublicateur=?";
      $varpageconnexionuser=connect()->prepare($sql);
      $varpageconnexionuser->execute(array($emailuser,$motdepasseuser));
      return $varpageconnexionuser;
    }

    //ESPACE ADMINISTRATEUR................................................
    function ADMIN($nomcompletadmin,$mail,$senha){
     
      try{
     $sql="INSERT INTO administrateur(nomcompletadmin,mail,senha)VALUES(?,?,?)";
     $varcreercompteuser=connect()->prepare($sql);
     $varcreercompteuser->execute(array($nomcompletadmin,$mail,$senha));
     return $varcreercompteuser;
     }catch(PDOException $e){
      die("DESOLE ERREUR DE CONNEXION BASE DE DONNEE".$e->getMessage());
        
       }
     }

     function CONNEXIONADMIN($emails,$senha){
    
      $sql= "SELECT* FROM administrateur WHERE mail=? AND senha=?";
      $varpageconnexionuser=connect()->prepare($sql);
      $varpageconnexionuser->execute(array($emails,$senha));
      return $varpageconnexionuser;
    }


    function AFFICHADMIN(){
     
       $sql="SELECT * FROM administrateur";
       $varaffichlisteuser=connect()->query($sql);
       return $varaffichlisteuser;
     }





?>