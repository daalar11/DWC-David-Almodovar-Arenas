<?php
// Array with names
$lloguer[0] = array("id"=>1,"usuari"=>"pep",
"casa_id"=>"1","data_entrada"=>"11/02/2021",
"data_sortida"=>"18/02/2021","preu"=>"300€");

$lloguer[1] = array("id"=>2,"usuari"=>"david",
"casa_id"=>"2","data_entrada"=>"11/03/2021",
"data_sortida"=>"18/03/2021","preu"=>"250€");

$lloguer[2] = array("id"=>3,"usuari"=>"joan",
"casa_id"=>"3","data_entrada"=>"11/04/2021",
"data_sortida"=>"18/04/2021","preu"=>"350€");

$lloguer[3] = array("id"=>4,"usuari"=>"pere",
"casa_id"=>"1","data_entrada"=>"11/03/2021",
"data_sortida"=>"18/03/2021","preu"=>"300€");
// get the q parameter from URL
    $hint="";
    foreach($lloguer as $casa) {
        $hint.= $casa['id'] . " " .$casa['usuari'].
        " ".$casa['casa_id']." ".$casa['data_entrada'].
        " ".$casa['data_sortida']." ".$casa['preu'];
    }


 
echo $hint;
?>