<?php

    $peso = $_GET['peso'];
    $peso = $peso *10000;
    $altura = $_GET['altura'];
    $imc = $peso/pow($altura,2);
if($imc < 20){
    echo "abaixo do peso!";
}elseif($imc >= 20 && $imc <= 50){
    echo "peso normal";
}elseif($imc >= 25 && $imc <=30){
    echo "sobre peso";
}elseif($imc >=30 && $imc <=40){
    echo "obeso";
}elseif($imc >=40){
    echo "obeso morbito";
}

?>