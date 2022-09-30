<?php
    $lado_1 = $_GET['lado_1'];
    $lado_2 = $_GET['lado_2'];
    $lado_3 = $_GET['lado_3'];


    if($lado_1 == $lado_2 && $lado_1 == $lado_3){
        echo "equilátero";
    }elseif($lado_1 == $lado_2 || $lado_1 == $lado_3 || $lado_2 == $lado_3){
        echo "isosceles";
    }else{
        echo "escaleno";
    }
?>