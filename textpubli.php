<?php
function exibirpub($imagepublication,$codpublication,$nompublicateur,$descriptpublication,$datepublication){
    $element="<div class=\"container\">
    <div class=\"row justify-content-center olo\">
   
    
<div class=\"col-md-4\">
<div class=\"inner\">
      <ul></ul>

     <img src=\"../IMAGES/$imagepublication\" class=\"card-img-top vb\" alt=\"...\">
      </div>
       <div class=\"card shadow\" style=\"width: 19rem; height:16rem; margin-left:-4rem\">
       <h4 class=\"card-title\">$nompublicateur</h4>
       <div class=\"card-body text-center\">
       <h5 class=\"card-title\">$codpublication</h5>
       <h5 class=\"card-title\">$datepublication</h5>
        <p class=\"card-text\">$descriptpublication</p>
        <a href=\"modal.php?des=\" class=\"btn btn-success\">Go somewhere</a>
  </div>
</div>
</div>
</div>
</div>
    ";
    echo $element;
}
?>