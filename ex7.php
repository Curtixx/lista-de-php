<?php
    $nota_1 = $_GET['nota_1'];
    $nota_2 = $_GET['nota_2'];
    $nota_3 = $_GET['nota_3'];
    $media = $nota_1+$nota_2+$nota_3;
    
    $media = $media /3;
    if($media >= 7.0){
        echo "o aluno foi aprovado!";
    }elseif($media < 7.0){
        echo "o aluno foi reprovado!";
    }
?>