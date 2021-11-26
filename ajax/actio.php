<?php
$operacio=$_REQUEST['oper'];
if($operacio=='mult'){
    $square=$_REQUEST['i1']*$_REQUEST['i2'];
}else{
    $square="caca";
}

echo $square;
?>