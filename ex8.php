<?php
$idade = $_GET['idade'];
if($idade >=5 && $idade <=7){
    echo "infantil A";
}elseif($idade >=8 && $idade <=11){
    echo "infantil B";
}elseif($idade >=12 && $idade <=13){
    echo "juvenil A";
}elseif($idade >=14 && $idade <=17){
    echo "juvenil B";
}elseif ($idade >= 18 && $idade <=80){
    echo "adulto";
}

?>