<?php
include('LESFONCTIONS/fonctions.php');
function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}


$result_markers = "SELECT addentreprise,lat,lng FROM markers as m,boutique as b WHERE m.idboutique=b.idboutique";
$resultado_markers = connect()->query($result_markers);
$cmd=$resultado_markers->fetchAll();
header("Content-type: text/xml");
echo'<?xml version="1.0" encoding="ISO-8859-1"?>';

// Start XML file, echo parent node
echo '<markers>';

foreach($cmd as $row_markers){
  // Add to XML document node
  echo '<marker ';
  echo 'addentreprise="' .$row_markers['addentreprise'] . '" ';
  echo 'lat="' . $row_markers['lat'] . '" ';
  echo 'lng="' . $row_markers['lng'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';



