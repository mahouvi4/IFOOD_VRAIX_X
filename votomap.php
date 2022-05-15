<?php
require_once('connexionbase.php');
/*$result_markers = "SELECT idlocalisation, nomentreprise, lat, lng,
 ( 3959 * acos( cos( radians(-33.737885) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(151.235260) ) 
 + sin( radians(-33.737885) ) * sin( radians( lat ) ) ) ) AS distance FROM markers  distance LIMIT 0, 20";
*/
$result_markers ="SELECT idmarkers,nomentreprise,addentreprise,lat,lng,( 6371 * acos( cos( radians(lat) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(lng) ) + sin( radians(lat) ) * sin( radians( lat ) ) ) ) 
AS distance FROM markers as m,boutique as b WHERE m.idboutique=b.idboutique";

$resultado_markers = connect()->query($result_markers);
?>
<!DOCTYPE html>
<html>
<body>

<?php

   while($row = $resultado_markers->fetch()){
        $filo= $row["idmarkers"]; 
        $vito= $row["nomentreprise"]; 
        $gog= $row["lat"]; 
        $diva= $row["lng"]; 
        $tupo= $row["distance"];
        echo $reponse=number_format($tupo,0)."km ". '<br>' ;
}
 ?>

</body>

</html>